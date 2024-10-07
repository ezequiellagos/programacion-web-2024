<?php
//Include y Require - Permiten incluir un archivo dentro de otro

/*
Include: Si el archivo no existe, el script sigue funcionando
Require: Si el archivo no existe, el script se detiene
Include_once: Si el archivo ya fue incluido, no lo vuelve a incluir
Require_once: Si el archivo ya fue incluido, no lo vuelve a incluir
*/

require_once "proceso.php";

echo suma(10, 5);
