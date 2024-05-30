<?php
require_once 'EspiasSoapClient.php';
require_once 'EspiasRestClient.php';

$action = $_POST['action'];
$response = array('status' => 'error', 'message' => 'Invalid action');

if ($action) {
    $soapClient = new EspiasSoapClient();
    $restClient = new EspiasRestClient();

    switch ($action) {
        case 'getPaises':
            $response = array('status' => 'success', 'data' => $soapClient->getPaises());
            break;
        case 'getEspias':
            $letrasEspia = $_POST['letrasEspia'];
            $tipo = $_POST['tipo'];
            $response = array('status' => 'success', 'data' => $soapClient->getEspias($letrasEspia, $tipo));
            break;
        case 'ejecutarSQL':
            $query = $_POST['query'];
            $response = array('status' => 'success', 'data' => $restClient->ejecutarSQL($query));
            break;
    }
}

echo json_encode($response);
