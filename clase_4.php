<?php

class ClaseEjemplo{
    
    # Establecer la propiedad nombre como privada.
    # Solamente se podrá acceder o modificar esta propiedad desde dentro de la clase.
    private $nombre = '';
    
    public function __construct(){
        # echo 'Hola, desde POO';
    }
    
    public function establecerNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function obtenerNombre(){
        echo $this->nombre;
    }
    
}

$objeto = new ClaseEjemplo();

$objeto->establecerNombre('358b06c6');
$objeto->obtenerNombre();