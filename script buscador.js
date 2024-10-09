function searchFormSubmit(event) {
    event.preventDefault();
    var rut = document.getElementById('rut').value;
    window.open('search_result.php?rut=' + rut, '_blank');
}

// funcion de click para agregar paciente
function addPatientButtonClick() {
    window.location.href = 'add_patient.php';
}

// agregar event listeners
document.getElementById('search-form').addEventListener('submit', searchFormSubmit);
document.getElementById('add-patient-btn').addEventListener('click', addPatientButtonClick);