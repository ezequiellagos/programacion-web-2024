<?php

session_start();

if(isset($_SESSION["nombre_usuario"])){
    echo "Nombre de usuario: ". $_SESSION["nombre_usuario"]. "<br>";
}else{
    echo "Sesion no iniciada";
}


?>