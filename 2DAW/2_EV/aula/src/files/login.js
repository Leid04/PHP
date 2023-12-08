function validarDatos(){
    const correo = document.querySelector("input[name='correo']").value;
    const password = document.querySelector("input[name='password']").value;

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(correo)) {
        alert("Tu correo no es valido!");
        return false;
    }

    if(correo.length < 7){//Pongo if si hubiese que tratar mas datos.
        alert("La longitud del correo tiene que ser mayor que 7 por lo menos.");
        return false;
    }
    if(password.length < 6){//Pongo if si hubiese que tratar mas datos.
        alert("La longitud de la contraseña tiene que mayor que 6.");
        return false;
    }
}