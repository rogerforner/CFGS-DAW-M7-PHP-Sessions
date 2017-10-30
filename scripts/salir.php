<?php
//#######################################################################
//################################################################ "INFO"
//***********************************************************************
//# *********************************************************************
//# Comrpobamos si existe una sesión activa.
//# Si existe una sesión activa la destruiremos y redirigiremos a index.php.
//# Si no existe una sesión activa mostramos la página 404.php; Lo hacemos
//# para evitar que se pueda acceder al archivo sin una sesión activa.
//# *********************************************************************
//La función session_start() es necesaria para que se detecte la sesión creada
//durante la validación de los datos del formulario.
session_start();

if (isset($_SESSION['usuario'])) {
  //Destruir sesiones activas.
  session_destroy();

  //Redirigir.
  header("Location: ../index.php");
  exit;

} else {
  header("Location: ../404.php");
  exit;
}

?>
