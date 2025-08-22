<?php

$username = ($_POST["username"]);
$email = ($_POST["email"]);
$password = ($_POST["password']);

$link = new mysqli("shrilvyn_Accounts", "Shrine1234", "Shrine1234!", "DatabaseTable");

if ($link === false) {
    die("Connection failed: " . mysqli_connect_error());
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
