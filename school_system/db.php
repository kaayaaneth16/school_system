<?php

$DBname = "school_system";
$user = "root";
$host= "localhost";
$pass = "460325546";
$dns = "mysql:$host=$host;dbname=$DBname;charset=utf8mb4";

$OPTIONS = [
    PDO :: ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
    PDO :: ATTR_DEFAULT_FETCH_MODE =>PDO ::FETCH_ASSOC,
    PDO :: ATTR_EMULATE_PREPARES => false,

];

try{
    $pdo = new PDO($dns,$user,$pass,$OPTIONS);
    echo"<h1><script> alert('connection succefully')</script></h1>";


}catch(\PDOException $e){
    die("fail connection ".$e->getMessage());

}



?>