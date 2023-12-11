// Función para capturar los valores del correo y la contraseña
function capturarDatos() {
    correo = document.querySelector("input[name='correo']").value;
    password = document.querySelector("input[name='password']").value;
}

// Función para realizar la solicitud AJAX
function realizarSolicitud() {
    if (validarDatos()) {
        const opciones = {
            method: "POST",
            headers: {'Content-Type': 'application/json'},
            body: JSON.stringify({ correo, password })
        };

        fetch("login.php", opciones)
            .then(responses => isResponseOk(responses))
            .then(data => leerDatos(data))
            .catch(er => leerErrores(er));
    }
}
realizarSolicitud();
// Funciones para AJAX
const isResponseOk = (responses) => {
    if (!responses.ok)
        throw new Error("Error " + responses.status + ": " + responses.statusText);
    return responses.json();
};

const leerDatos = (data) => {
    let bienvenida = document.createElement("p");
    bienvenida.textContent = "Inicio de sesión exitoso, hola " + data.nombre;
    document.body.appendChild(bienvenida);
};

const leerErrores = (er) => {
    console.error("Ha habido el siguiente error: " + er);
};

// Código para validar datos
function validarDatos() {
    capturarDatos();

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(correo)) {
        alert("Por favor, ingresa un correo electrónico válido.");
        return false;
    }

    if (correo.length < 7) {
        alert("La longitud del correo debe ser mayor a 7 caracteres.");
        return false;
    }

    if (password.length < 6) {
        alert("La longitud de la contraseña debe ser mayor a 6 caracteres.");
        return false;
    }
    return true;
}