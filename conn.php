<?php
function dbConn()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "soap";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connexion echoué%s\n". $conn -> error);

    return $conn;
}
function endConn($conn)
{
    $conn -> close();
}
function recettes ($id, $nomRecette, $descriptionRecette) {
    $sql = "SELECT * FROM recettes where id ='$id'";
    $query = mysqli_query($sql, $this->$conn);
    $result = mysqli_fetch_all($query);
    var_dump($result);
    return $result;
}
ini_set('soap.wsdl_cache_enabled', 0);
$serversoap=new SoapServer("http://localhost/tp_soap/server.wsdl");
$serversoap->addFunction("dbConn");
$serversoap->addFunction("recettes");

$serversoap->handle();
?>