<?php
class EspiasSoapClient
{
    private $client;

    public function __construct()
    {
        $this->client = new SoapClient("http://172.20.141.223/WS_exa/EspiasSoap.php?wsdl");
    }

    public function getPaises()
    {
        return $this->client->getPaises();
    }

    public function getEspias($letrasEspia, $tipo)
    {
        return $this->client->getEspias($letrasEspia, $tipo);
    }

    public function getPaisEspias($letrasPais, $short)
    {
        return $this->client->getPaisEspias($letrasPais, $short);
    }

    public function getGasto($id, $tipo)
    {
        return $this->client->getGasto($id, $tipo);
    }
}
