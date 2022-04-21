<?php

    function dbConn()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "soap";
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
        return $conn;
    }

    function endConn($conn)
    {
        $conn->close();
    }

     function recettes()
    {
        $result = array();
        try {
            $sql = "SELECT * FROM recettes";
            $query = mysqli_query($sql,$this->$conn);
            $rslt = mysqli_fetch_all($query);
            while ($rslt){
                $result[] = $rslt;
                $rslt = mysqli_fetch_row($rslt);
            }
        }
        catch (Exception $e) {
            // handle exception
        }

        print_r($result);
        return $result;
    }
ini_set('soap.wsdl_cache_enabled', 0);
$serversoap=new SoapServer("http://localhost/tp_soap/server.wsdl");
$serversoap->addFunction("dbConn");
$serversoap->addFunction("recettes");

$serversoap->handle();
?>