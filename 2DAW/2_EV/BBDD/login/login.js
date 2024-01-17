document.addEventListener("DOMContentLoaded", () => {
  const button = document.querySelector("#submitBtn");

  async function enviar() {
    const usuario = document.querySelector("input[name=usuario]").value;
    const password = document.querySelector("input[name=password]").value;

    
    const options = {
      method: "POST",
      headers: { "Content-Type": "application/json"},
      body: JSON.stringify({usuario: usuario, password: password}),
    };

    const getData = (data) => {
      try {
        const parsedData = JSON.parse(data);
          if (parsedData.success) {
            console.log('Login exitoso', parsedData);
          } else {
            console.error('Login fallido', parsedData);
          }
      } catch (error) {
        console.error("Error al parsear la respuesta JSON", error);
      }
    };

    const getError = (er) => {
      console.log(`Error ${er.status}: ${er.statusText}`);
    };

    try {
      const response = await fetch("./loginOK.php", options);
      const data = await response.text();
      getData(data);
    } catch (er) {
      getError(er);
    }
  }

  button.addEventListener("click", enviar);
});
