<?php
    //Include y Require
    // Incluir un archivo dentro de otro

    /* 
    Include: El include si el archivo no existe, el script sigue funcionando.

    Require: Si el archivo no existe, el script se detiene.

    include_once: Si el archivo ya fue incluido, no lo vuelve a incluir
    
    requiere_once: Si el archivo ya fue incluido, no lo vuelve a incluir


    
    */

    include "proceso.php";

    echo "test";
?>