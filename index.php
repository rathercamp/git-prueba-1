<?php
require_once "Persona.php";
echo "hey, estoy usando GIT.";

echo "Modificando el archivo.";

$persona = new Persona("Mike");

echo $persona->getNombre();