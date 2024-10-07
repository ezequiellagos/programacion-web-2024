<?php


    // include y Requiere
    // incluir un archivo dentro de otro

    /**
    include: si el archivo no existe, el scrip sigue funcionando

    requiere: si el archivo no existe; el scrip se detiene
    
    include_once: si el archivo ya fue incluido no se vuelve a incluir
    
    require_once: si el archivo ya fue incluido no se vuelve a incluir
    */

    require_once "proceso.php";

    echo suma(10, 5)

?>