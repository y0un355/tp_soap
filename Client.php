<?php
ini_set('soap.wsdl_cache_enabled', 0);
$service=new SoapClient("http://localhost/tp_soap/server.wsdl");
$taballservices=$service->dbConn();
$taballrecettes=$service->recettes();
$tabnewRecettes=$service->newRecette();

print_r($taballrecettes);
?>