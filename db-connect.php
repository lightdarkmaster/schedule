<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='dummy_db';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}