<?php

// Sesiones
// Se almacenan en el servidor, no en la compútadora del usuario

// Cookies
// La información se almacena en la computadora

// Tiempo de vida de la sesión en segundos
$tiempo_de_vida = 300; // 300 segundos = 5 minutos

// Establecer el tiempo de recoleccion de basura
ini_set("session.gc_maxlifetime", $tiempo_de_vida);

// Iniciar sesión
session_start();

// Configurar cariables de sesión
$_SESSION["nombre"] = "Juan";
$_SESSION["apellido"] = "Perez";

// Mostrar variables de sesion
echo "Nombre: " . $_SESSION["nombre"] . "<br>";
echo "Apellido: " . $_SESSION["apellido"] . "<br>";

// Eliminar una variable de sesion
unset($_SESSION["nombre"]);
unset($_SESSION["apellido"]);

session_destroy();

echo "Nombre: " . $_SESSION["nombre"] . "<br>";
echo "Apellido: " . $_SESSION["apellido"] . "<br>";

