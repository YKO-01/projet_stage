<?php 


$dsn="mysql:host=localhost;dbname=aqari";
$user="root";
$password="";
$options=array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8", 
);

try{

$pdo= new PDO($dsn,$user,$password,$options);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $er){
    echo "failed to do a connect". $er->getmessage();
}