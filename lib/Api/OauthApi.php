<?php

/**
 * Geração de AcessToken via OAuth2 
 *
 */
namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

class OauthApi
{

    /**
     *
     * @var ClientInterface
     */
    protected $client;

    /**
     *
     * @var Configuration
     */
    protected $config;

    /**
     *
     * @param ClientInterface $client
     * @param Configuration $config
     * @param HeaderSelector $selector
     */
    public function __construct(ClientInterface $client = null, Configuration $config = null)
    {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
    }

    /**
     *
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**Obtém um Acces token oauth para uso nas requisições da Api Pix Itau
     * 
     * @return string Accestoken 
     */
    public function gerarAccessToken()
    {
        echo "* OauthApi->gerarAccessToken():\n";
        $headerParams = [];
        $httpBody = '';
        $response = null;
        $token = "";

        $headerParams['Content-Type'] = "application/json";
        $clientId = $this->config->getApiKey('client_id');
        $clientSecret = $this->config->getApiKey('client_secret');
        $httpBody = '{ "client_id":"'.$clientId.'", "client_secret":"'.$clientSecret.'" }';

        if($config->isModoProducao()){
            echo "* Modo Producao. Aplicando cert e ssl_key no header da requisicao\n";
            if ($config->getPathCertificado() !== null && $config->getPathPrivateKey() !== null) {
                $headerParams['cert'] = $config->getPathCertificado();
                $headerParams['ssl_key'] = $config->getPathPrivateKey();
            }else{
                throw new ApiException(
                    "* Modo Producao: Path p/ Certificado e path p/ Private Key obrigatorio.",
                    0,
                    null,
                    null
                );
            }
        }

        $request = new Request('POST', $this->config->getUrlOAuth(), $headerParams, $httpBody);
        $options = $this->createHttpClientOption();

        try {
            $response = $this->client->send($request, $options);
            if ($response->getBody()) {
                $bodyJson = json_decode($response->getBody());
                $token = $bodyJson->{'access_token'};
            }
        } catch (Exception $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                $e->getCode(),
                $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
            );
        }

        return $token;
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (! $options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}