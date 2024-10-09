<?php
// conexion a base de datos
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check conexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the username, email, and password from the registration form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Insert the user data into the database
$query = "INSERT INTO users (username, email) VALUES ('$username', '$email')";
mysqli_query($conn, $query);

// Get the user ID
$user_id = mysqli_insert_id($conn);

// Insert the password hash into the passwords table
$query = "INSERT INTO passwords (id, password) VALUES ('$user_id', '$password_hash')";
mysqli_query($conn, $query);

// Close the database connection
mysqli_close($conn);

// Display a success message
echo "Registration successful!";
?>