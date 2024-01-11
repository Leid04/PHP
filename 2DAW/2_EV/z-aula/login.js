async function enviar(event) {
  //con async devolvemos una promesa. Permite el uso de await dentro de ella
  event.preventDefault(); // Evitar el comportamiento por defecto.
  //-------------------------------------------RECOGER DATOS----------------------------------------------------
  const formulario = document.querySelector("#formu");
  const resultados = document.querySelector("#resultados");
  const correo = formulario.querySelector('input[name="correo"]').value;
  const password = formulario.querySelector('input[name="password"]').value;
  //---------------------------------------------VALIDAR--------------------------------------------------------
  if (password.length < 5) {
    resultados.innerHTML = "Demasiado pequeño el password";
    return;
  }
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(correo)) {
    resultados.innerHTML = "Por favor, ingresa un correo electrónico válido.";
    return;
  }
  //----------------------------------------------ENVIAR--------------------------------------------------------
  const getData = (data) => (resultados.innerHTML = data.mensaje);
  const getError = (er) =>
    (resultados.innerHTML = "Error en el servidor:" + er.message);
  //Con que opciones vamos a hacer el envio.
  const options = {
    method: "POST",
    body: new FormData(formulario), //Devuelve un objeto de formulario. Mas info en: https://es.javascript.info/formdata
  };

  try {
    //con await esperamos que la promesa se resuelva. Solo dentro de las funciones async
    const response = await fetch("login.php", options); //Esperamos que se resulelva.
    const data = await response.json();
    getData(data);
  } catch (error) {
    getError(error);
  }
}
