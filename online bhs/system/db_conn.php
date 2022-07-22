<?php 



$sName = "localhost";

$uName = "";

$pass = "";

$db_name = "";



try {

    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 

                    $uName, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

  echo "Connection failed : ". $e->getMessage();

}

