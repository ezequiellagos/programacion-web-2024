<?php
// include y requiere
// incluir un archivo dentro de otro 

/*

include: si el archivo no existe el include sigue funcionando
require: si el archivo no existe el script se detine 
include_once: si el archivo ya fue incluido no lo vuelve a incluir 
require_once: si el archivo ya fue incluido no lo vuelve a incluir 



*/

require_once "proceso.php";

echo suma(10,5);