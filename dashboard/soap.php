<?php
$URL = 'http://172.20.141.223/WS_exa/EspiasSoap.php?wsdl';
$client = new SoapClient($URL);

var_dump($client->__getFunctions());
