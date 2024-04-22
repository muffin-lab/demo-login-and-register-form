<?php

// (Replace with your database connection details)
$fullName = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  $stmt = $conn->prepare("INSERT INTO registration_table(fullname, email, password) values(?, ?, ?)");
  $stmt->bind_param("sss", $fullName, $email, $password);
  $execval = $stmt->execute();
  echo $execval;
  echo "Registration successfully...";
  $stmt->close();
  $conn->close();
}
