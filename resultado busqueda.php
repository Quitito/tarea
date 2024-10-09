<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// obtener rut del formulario de busqueda
$rut = $_GET['rut'];

// consulta a la  base de datos para obtener la info del paciente

$query = "SELECT * FROM patients WHERE rut = '$rut'";
$result = mysqli_query($conn, $query);

// Check si el paciente existe
if (mysqli_num_rows($result) > 0) {
    // Dmostrar  la información del paciente

    $row = mysqli_fetch_assoc($result);
    echo "<h2>Patient Data</h2>";
    echo "<p>RUT: " . $row['rut'] . "</p>";
    echo "<p>Nombre: " . $row['nombre'] . "</p>";
    echo "<p>Apellidos: " . $row['apellidos'] . "</p>";
    echo "<p>Edad: " . $row['edad'] . "</p>";
    echo "<p>Sexo: " . $row['sexo'] . "</p>";
    echo "<p>Medicamento: " . $row['medicamento'] . "</p>";
    echo "<p>Dosis: " . $