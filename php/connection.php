<?php
$servername = "194.195.212.34";
$username = "snpstenaup";
$password = "2zprfDUAeB";
$dbname = "snpstenaup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  include 'email-setup-page.php';
}

?>