<?php

session_start();

$serverName ="localhost";
$userName = "root";
$password ="";
$dataBase ="gestion_instruments_musicales";
// Create connection
$connexion = mysqli_connect($serverName, $userName, $password, $dataBase);