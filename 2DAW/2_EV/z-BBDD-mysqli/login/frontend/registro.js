async function envio() {
  const formData = new FormData(document.forms["formulario"]);
  const options = { method: 'POST', body: formData};

  const getError = (error) => console.error('Error en la solicitud:', error.message);
  const getData = (data) => {
    if (data.success) {
      console.log('Inicio de sesión exitoso');
      console.log('Datos del usuario:', data.message);
    } else {
      console.error('Error en el inicio de sesión:', data.error);
    }
  };

  try {
    const response = await fetch("./backend/registroOK.php", options);
    const data = await response.json();
    getData(data);
  } catch (error) {
    getError(error);
  }
}
document.querySelector('#envio').addEventListener('click', envio);