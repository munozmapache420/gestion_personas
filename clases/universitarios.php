<?php
class universitario extends persona {
    public $carrera;

    public function __construct($nombre,$edad,$correo,$carrera){
        parent::__construct($nombre,$edad,$correo);
        $this->carrera=$carrera;
    }

    public function saludar() {
        return parent::saludar(). $this->carrera;
    }
}

?> 