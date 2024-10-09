<?php
// conectar a la base de datos
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check conexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Crear boton de busqueda
echo "<form id='search-form'>";
echo "RUT: <input type='text' id='rut' name='rut'>";
echo "<input type='submit' value='Search'>";
echo "</form>";

// Crear boton de agregar nuevo paciente
echo "<button id='add-patient-btn'>Add New Patient</button>";

// JavaScript code to handle the search form submission and add patient button click
echo "<script>";
echo "document.getElementById('search-form').addEventListener('submit', function(event) {";
echo "event.preventDefault();";
echo "var rut = document.getElementById('rut').value;";
echo "window.open('search_result.php?rut=' + rut, '_blank');";
echo "});";

echo "document.getElementById('add-patient-btn').addEventListener('click', function() {";
echo "window.location.href = 'add_patient.php';";
echo "});";
echo "</script>";
?>