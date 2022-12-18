<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "final_project";


$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);