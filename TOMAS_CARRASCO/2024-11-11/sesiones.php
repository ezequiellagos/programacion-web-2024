<?php

//sesiones
// se almacenan en el servidor, no en la computadora del usuario

//cookies
// la infomacion se almacena en la computadora

//iniciar sesion
session_start();

// tiempo de vida de la sesion en segundos
$tiempo_vida = 300; // 300 segundos = 5 minutos

// establecer el tiempo de recoleccion de basura
ini_set('session.gc_maxlifetime', $tiempo_vida);

//configurar variables de sesion
$_SESSION["nombre"] = "Juan";
$_SESSION["apellido"] = "Perez";

//mostrar variables de sesion
echo "Nombre: ". $_SESSION["nombre"]."<br>";
echo "Apellido: ". $_SESSION["apellido"]."<br>";

//eliminar una variable de sesion
unset($_SESSION["nombre"]);
unset($_SESSION["apellido"]);

session_destroy();

echo "Nombre: ". $_SESSION["nombre"]."<br>";
echo "Apellido: ". $_SESSION["apellido"]."<br>";

?>