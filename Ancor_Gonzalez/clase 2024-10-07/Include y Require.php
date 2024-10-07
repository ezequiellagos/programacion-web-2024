<?php

// iNCLUDE y Require
// incluir un archivo dentro de otro

/*
include: si el archivo no existe el script sigue funcionando
Require: si el archivo no existe el script se detiene
include_once: si el archivo ya fue incluido no lo vuelve a incluir
require_once: si el archivo ya fue incluido no lo vuelve a incluir
*/

// require once sera lo mas utilizado 
// antes del archivo puedes ir comentarios pero estos codigo van siempre arriba
require_once "proceso.php";


echo suma(10,5);

//daisy para tipo bootstrap
// tag .row
?>