const borrarAnimal = (animalId) => {
  const options = {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ id: animalId }),
  };
  const getData = (data) => {
    if (data.success) {
      alert("Animal borrado exitosamente.");
      location.reload();
    } else {
      alert("Error al borrar el animal.");
    }
  };
  const getError = (er) => {
    console.error("Error:", error);
    alert("Error al procesar la solicitud.");
  };

  if (confirm("Enserio quieres borrar este animal?")) {
    fetch("borrar_animal.php", options)
      .then((response) => response.json())
      .then((data) => getData(data))
      .catch((error) => getError());
  }
};
