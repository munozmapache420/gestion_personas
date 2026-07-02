<?php

class persona {
    public $nombre;
    public $edad;
    public $correo;

    public function __construct($nombre,$edad,$correo){
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->correo=$correo;
    }

    public function saludar() {
        return " hola mapache " ."</br>". $this->nombre . "</br> " . $this->edad . "</br> " . $this->correo;
    }
}

?>