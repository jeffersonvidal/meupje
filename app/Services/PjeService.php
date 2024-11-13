<?php

namespace App\Services;

use GuzzleHttp\Client;
use SimpleXMLElement;

class PjeService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function consultarProcesso($numeroProcesso)
    {
        $response = $this->client->post(config('services.pje.base_url'), [
            'body' => $this->montarXmlConsulta($numeroProcesso),
            'headers' => [
                'Content-Type' => 'application/soap+xml',
            ],
        ]);

        $body = $response->getBody()->getContents();
        return $this->parseResponse($body);
    }

    protected function montarXmlConsulta($numeroProcesso)
    {
        return "
        <soapenv:Envelope xmlns:soapenv='http://schemas.xmlsoap.org/soap/envelope/' xmlns:ser='http://www.cnj.jus.br/Intercomunicacao'>
            <soapenv:Header/>
            <soapenv:Body>
                <ser:ConsultarProcesso>
                    <numeroProcesso>{$numeroProcesso}</numeroProcesso>
                </ser:ConsultarProcesso>
            </soapenv:Body>
        </soapenv:Envelope>";
    }

    protected function parseResponse($response)
    {
        $xml = new SimpleXMLElement($response);
        $movimentacoes = [];

        foreach ($xml->xpath('//movimentacao') as $mov) {
            $movimentacoes[] = [
                'data' => (string) $mov->data,
                'descricao' => (string) $mov->descricao,
                'documento' => (string) $mov->documento, // URL ou base64 de PDF
            ];
        }

        return $movimentacoes;
    }
}
