<?php
// Verificar si se recibieron los datos del formulario
if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['categoria']) && isset($_POST['descripcion'])) {
  // Obtener los datos del formulario
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $categoria = $_POST['categoria'];
  $descripcion = $_POST['descripcion'];

  // Realizar las acciones necesarias para procesar el ticket
  // Por ejemplo, puedes almacenar los datos en una base de datos, enviar notificaciones, etc.

  // Redirigir al usuario a una página de confirmación o mostrar un mensaje de éxito
  header("Location: confirmacion_ticket.html");
  exit;
} else {
  // Si no se recibieron los datos esperados, redirigir al usuario a una página de error o mostrar un mensaje de error
  header("Location: error.html");
  exit;
}
?>