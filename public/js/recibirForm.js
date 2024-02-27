console.log("Soka");
function enviarFormulario(parametro_id) {
  var formularioid = document.getElementById(parametro_id);
  console.log("Real madrid");

  var objetoForm = new FormData(formularioid);

  fetch("./public/view/managerServis.php", {
    method: "POST",
    body: objetoForm,
  })
    .then((response) => response.text())
    .then((data) => {
      console.log("Respuesta del servidor:", data);
      alert("Enviado con exito");
    })
    .catch((error) => {
      console.error("Error al enviar formulario:", error);
    });
}
