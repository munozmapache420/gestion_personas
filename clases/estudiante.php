<?php
 require_once "personas.php";
class estudiante extends persona {
    public function saludar() {
        return " hola estudiante " . $this->nombre . "</BR>" . $this->edad . "</BR>" . $this->correo . "</BR>" . " y soy un estudiante de software xd";
    }
}
?>