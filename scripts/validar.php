<?php
//#######################################################################
//############################################################## "ÍNDICE"
//***********************************************************************
//# *********************************************************************
//# Funciones
//# Valores
//# Validar usuario e iniciar la sesión
//# *********************************************************************

//# Funciones
//# ---------------------------------------------------------------------

//# Valores
//# ---------------------------------------------------------------------
//Obtener los valores introducidos en los campos del formulario.
$correo = $_POST['correo']; //name="correo"
$contrasena = $_POST['contrasena']; //name="contrasena"

//Simulamos la existencia de un usuario
$user = "roger@forner.com";
$pass = "123";

//# Validar usuario
//# ---------------------------------------------------------------------
if ($correo == $user && $contrasena == $pass) {
  //Creamos una sesión.
  session_start();

  //Registramos una sesión.
  $_SESSION['usuario'] = $user;

  //Redirigimos al index.php, en el que se mostrará el contenido deseado.
  //Si existe la $_SESSION['usuario'] mostraremos el logout, en caso contrario
  //mostraremos el formulario de login.
  header("Location: ../index.php");
  exit;

} else {
  header("Location: ../404.php");
  exit;
}

?>
