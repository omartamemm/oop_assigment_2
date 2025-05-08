<?php

$host="localhost";

$host_name="root";
$password="";
$db_name="market";


try {
    $conn=new PDO("mysql:host=".$host.";db_name=".$db_name,$host_name,$password);

    
} catch (PDOException $e) {
   
    echo "not connected ","<br>";
    echo $e->getMessage();

}
