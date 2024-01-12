async function borrarAnimal(animalId) {
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
  const getError = (er) => alert("Error:", er);

  if (confirm("Enserio quieres borrar este animal?")) {
    try {
      const response = await fetch("borrar_animal.php", options);
      const data = await response.json();
      getData(data);
    } catch (er) {
      getError(er);
    }
  }
}
