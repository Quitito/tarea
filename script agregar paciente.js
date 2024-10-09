// Function para manejar el formulario de agregar paciente
function addPatientFormSubmit(event) {
    event.preventDefault();
    var rut = document.getElementById('rut').value;
    var nombre = document.getElementById('nombre').value;
    var apellidos = document.getElementById('apellidos').value;
    var edad = document.getElementById('edad').value;
    var sexo = document.getElementById('sexo').value;
    var direccion = document.getElementById('direccion').value;
    var medicamento = document.getElementById('medicamento').value;
    var dosis = document.getElementById('dosis').value;
    var formData = new FormData();
    formData.append('rut', rut);
    formData.append('nombre', nombre);
    formData.append('apellidos', apellidos);
    formData.append('edad', edad);
    formData.append('sexo', sexo);
    formData.append('direccion', direccion);
    formData.append('medicamento', medicamento);
    formData.append('dosis', dosis);
    fetch('add_patient.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data === 'Patient added successfully') {
            window.location.href = 'search_engine.php';
        } else {
            alert(data);
        }
    })
    .catch(error => console.error('Error:', error));
}

// Add event listener to add patient form
document.getElementById('add-patient-form').addEventListener('submit', addPatientFormSubmit);