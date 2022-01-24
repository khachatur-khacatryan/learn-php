<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "php";

ini_set('display_errors',1);
error_reporting(E_ALL);

$connect = new mysqli($servername,$username,$password,$dbName);



  if ($connect->connect_error) {  
    die("Ошибка подключения" . $connect->connect_error);
  }
  
  session_start();

  ?>