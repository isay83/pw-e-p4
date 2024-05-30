<?php
class EspiasRestClient
{
    private $url;

    public function __construct()
    {
        $this->url = "http://172.20.141.223/WS_exa/wsRestFul.php";
    }

    public function ejecutarSQL($query)
    {
        $data = array('query' => $query);
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data),
            ),
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($this->url, false, $context);
        if ($result === FALSE) {
            return null;
        }
        return json_decode($result, true);
    }
}
