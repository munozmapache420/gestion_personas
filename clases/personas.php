<?php

class persona {
    public $nombre;
    public $edad;
    public $correo;

    public function saludar() {
        return " hola mapache " ."</br>". $this->nombre . "</br> " . $this->edad . "</br> " . $this->correo;
    }
}

?>