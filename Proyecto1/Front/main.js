function validateLogin() {
    var username = document.getElementById("dni").value;
    var password = document.getElementById("password").value;
    var message = document.getElementById("message");

    /// Verificar si los campos están vacíos
    if (username === '' || password === '') {
        message.textContent = 'Por favor, complete todos los campos.';
    } else {
        // Simula una validación exitosa. Aquí puedes agregar tu lógica de autenticación real.
        var isAuthenticated = true;

        if (isAuthenticated) {
            // Redirige al usuario a otra página después de una validación exitosa
            window.location.href = "./ApoderadoInicio.html";
        } else {
            message.textContent = 'Credenciales incorrectas. Por favor, inténtelo de nuevo.';
        }
    }
}