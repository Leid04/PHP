document.addEventListener("DOMContentLoaded", () => {
  const button = document.querySelector("input[type=submit]");
  async function enviar() {
    const options = {
      method: "POST",
      header: { "Content-Type:": "application/json" },
      body: new FormData(document.forms["formulario"]),
    };
    const getData = (data) => {
      if (data.success) {
        //Aqui los datos recuperados
      } else {
        alert("Error en para conectarse");
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
  button.addEventListener("click", enviar());
});
