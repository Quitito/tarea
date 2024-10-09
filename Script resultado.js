// funcion para visualizar los datos del paciente
function displayPatientData() {
    var rut = getParameterByName('rut');
    var patientData = document.getElementById('patient-data');
    fetch('search_result.php?rut=' + rut)
    .then(response => response.text())
    .then(data => {
        patientData.innerHTML = data;
    })
    .catch(error => console.error('Error:', error));
}

// Funcion para obtener parametro por nombre desde URL
function getParameterByName(name) {
    var url = window.location.href;
    var param = new URLSearchParams(url.split('?')[1]);
    return param.get(name);
}

// Call displayPatientData funcion en la pagina cargada
window.onload = displayPatientData;