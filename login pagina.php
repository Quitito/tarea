<?php
// Conectar a base de datos
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check conexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// obtener username y pass de login form
$username = $_POST['username'];
$password = $_POST['password'];

// Busqueda en base de datos si los datos existen
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $query);

// Check si el usuario existe
if (mysqli_num_rows($result) > 0) {
    // obtener la pass hash de la base de datos
    $row = mysqli_fetch_assoc($result);
    $password_hash = $row['password'];

    // Verificar password
    if (password_verify($password, $password_hash)) {
        // Login valido, redirigir a la pagina de busqueda
        header("Location: search_engine.php");
        exit;
    } else {
        // Login fallo, mostrar mensaje de error
        echo "Invalid username or password";
    }
} else {
    // User no existe, mensaje de error
    echo "User  does not exist";
}

// Cerrar conexion
mysqli_close($conn);
?>