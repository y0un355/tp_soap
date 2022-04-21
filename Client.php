<?php
ini_set('soap.wsdl_cache_enabled', 0);
$service=new
SoapClient("http://localhost/tp_soap/Server.wsdl");
$taballservices=$service->dbConn();
$taballservices=$service->recettes();

print_r($taballservices);
?>