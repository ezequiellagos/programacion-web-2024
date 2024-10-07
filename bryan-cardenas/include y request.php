<?php 
    //todos estas lineas son para incluir archivos algunas requieren para funcionar y otras no.
    //include incluye un archivo , si no existe sigue corriendo el programa
    //require requiere un archivo , si no existe se detiene el programa
    //include_once si el archivo fue incluido no lo vuelve a incluir
    //require_once si el archivo ya fue incluido no lo vuelve a incluir

    //include "proceso.php";
    //require "proceso.php";
    require_once "proceso.php";
    echo suma(1,2);
?>