<?php

session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test123";


$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
