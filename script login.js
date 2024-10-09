function loginFormSubmit(event) {
    event.preventDefault();
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var formData = new FormData();
    formData.append('username', username);
    formData.append('password', password);
    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        if (data === 'Login successful') {
            window.location.href = 'search_engine.php';
        } else {
            alert(data);
        }
    })
    .catch(error => console.error('Error:', error));
}

// agregar event listener al formulario login
document.getElementById('login-form').addEventListener('submit', loginFormSubmit);