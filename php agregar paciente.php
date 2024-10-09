<?php
// Connect a la base de datos
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check conexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// conseguir los datos del paciente del formulario
$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$direccion = $_POST['direccion'];
$medicamento = $_POST['medicamento'];
$dosis = $_POST['dosis'];

// agregar datos de lpaciente en la base de datos
$query = "INSERT INTO patients (rut, nombre, apellidos, edad, sexo,direccion, medicamento, dosis) VALUES ('$rut', '$nombre', '$apellidos', '$edad', '$sexo', '$direccion', '$medicamento', '$dosis')";
mysqli_query($conn, $query);

// Close conexion a la base de datos
mysqli_close($conn);

// mostrar mensaje de hecho
echo "Patient added successfully!";
?>