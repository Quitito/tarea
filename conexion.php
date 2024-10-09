<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the username and password from the login form
$username = $_POST['username'];
$password = $_POST['password'];

// Query the database to check if the user exists
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);

// Check if the user exists
if (mysqli_num_rows($result) > 0) {
    // Get the user's password hash from the