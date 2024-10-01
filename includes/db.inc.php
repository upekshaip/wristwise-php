<?php

// $serverName = "localhost";
// $dbUsername = "ztoxy";
// $dbPassword = "watchdogs@me2";
// $dbName = "web_login";
// $port = 8111;

$serverName = "us-cluster-east-01.k8s.cleardb.net";
$dbUsername = "baaca4c2c90430";
$dbPassword = "a5caf4cb";
$dbName = "heroku_f8ad0d16f699d5f";


$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection faild: " . mysqli_connect_error());
} else {
    // echo "It's working!";
}