<?php
//Config connection
    $host       = "localhost"; //Parametros 
    $port       = "5432";
    $dbname     = "schoolar";
    $user       = "postgres";
    $password   = "POSTGRES";

//Create connection 
$conn = pg_connect("
    host = $host
    port = $port
    dbname = $dbname 
    user = $user
    password = $password 
");

if(!$conn){
    die("Connection error: " . pg_last_error()); //Validación
}else{
    echo "Success connection";
}

pg_close();
?>