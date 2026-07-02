<?php
require_once "../clases/personas.php";

$persona1 = new persona();
$persona1->nombre = "adminMapache";
$persona1->edad = 25;
$persona1->correo = "adminMapache@example.com";
echo $persona1->saludar();

$persona2 = new persona();
$persona2->nombre = "usuario";
$persona2->edad= 20;
$persona2->correo= "usuario420@gmail.com";
echo $persona2->saludar();

?>