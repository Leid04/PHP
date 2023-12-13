document.addEventListener("DOMContentLoaded", () => {
    let boton = document.querySelector("button[name='submit']");

    // Verifica si el botón fue encontrado antes de asignar el evento
    if (boton) {
        boton.addEventListener("click", function (event) {
            event.preventDefault();
            realizarSolicitud();
        });
    } else {
        console.error("Botón no encontrado");
    }
});

// Función para realizar la solicitud AJAX
function realizarSolicitud() {
    let correo = document.querySelector("input[name='correo']").value;
    let password = document.querySelector("input[name='password']").value;
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
    console.error("Ha habido un error inesperado:", er);
};

// Código para validar datos
function validarDatos() {
    let correo = document.querySelector("input[name='correo']").value;
    let password = document.querySelector("input[name='password']").value;
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