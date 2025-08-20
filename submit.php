<?php

// Create connection
$conn = new mysqli("shrilvyn_Accounts", $username, $password, $dbname);
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $user, $pass);

// Set parameters and execute
$user = $_POST['username'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();
?>
