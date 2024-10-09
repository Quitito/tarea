<?php
$conn = mysqli_connect("localhost", "username", "password", "database");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// cambio password
$old_password = $_POST['old-password'];
$new_password = $_POST['new-password'];
$confirm_new_password = $_POST['confirm-new-password'];

// verificar que la pass vieja sea correcta
$query = "SELECT * FROM passwords WHERE id = '$user_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$password_hash = $row['password'];

if (password_verify($old_password, $password_hash)) {
    // Hash la pass nueva
    $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

    // actualizar password hash
    $query = "UPDATE passwords SET password = '$new_password_hash' WHERE id = '$user_id'";
    mysqli_query($conn, $query);

    // mensaje de cambio exitoso
    echo "Password se cambio extiosamente!";
} else {
    // mensaje de error
    echo "la password no es correcta";
}

// Cerrar conexion a la base de datos
mysqli_close($conn);
?>