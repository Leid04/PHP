const EVENTOS = new EventManager();
let correo = document.querySelector("input[name='correo']").value;
let password = document.querySelector("input[name='password']").value;
let boton = document.querySelector("button[name='submit']").value;
boton.addEventListener("click", function (event) {
    event.preventDefault();
    realizarSolicitud();
});

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
            .then(data => getData(data))
            .catch(er => getErrors(er));
    }
}
// Funciones para AJAX
const isResponseOk = (responses) => {
    if (!responses.ok)
        throw new Error("Error " + responses.status + ": " + responses.statusText);
    return responses.json();
};

const getData = (data) => {
    let bienvenida = document.createElement("p");
    bienvenida.textContent = "Inicio de sesión exitoso, hola " + data.nombre;
    document.body.appendChild(bienvenida);
};

const getErrors = (er) => {
    console.error("Ha habido el siguiente error: " + er);
};

// Código para validar datos
function validarDatos() {

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