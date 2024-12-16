<?php

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', 'root', 'equiparentmvc');
    $db->set_charset('utf8');
    $host="localhost";
    $port=3306;
    $socket="";
    $user="root";
    $password="root";
    $dbname="equiparentmvc";

// $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
// 	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();


   if(!$db) {
    echo "Error no se pudo conectar";
    exit;
   }

return $db;

}



