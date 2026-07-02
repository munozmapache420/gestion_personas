<?php
require_once "../clases/personas.php";

$persona1 = new persona("adminMapache", 25, "adminMapache@example.com");
echo $persona1->saludar();
$persona2 = new persona("userMpache", 30, "userMpache@example.com");
echo $persona2->saludar();
?>