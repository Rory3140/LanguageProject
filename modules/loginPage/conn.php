<?php
$serverip = "localhost";
$username = "websiteAccess";
$password = "accessPassword";
$dbname = "website";

// Create connection
$conn = new mysqli($serverip, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}