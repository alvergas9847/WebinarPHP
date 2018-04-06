<?php
/**
  * Ejercicio:
  * 
  * 1. Crear una función que modifique la propiedad $nombreObjeto.
  * 2. Convertir en privada la propiedad $nombreObjeto.
  * 3. Crear 5 diferentes objetos con diferente nombre y mostrar los nombres de cada uno.
  * 
  * Autor: 358b06c6
  * Fecha: 31/03/2018
  * 
  * Ejercicio de la clase en vivo: https://www.facebook.com/ComunidadDePeHPe/videos/1482443465199112/
  *
*/

class Clase{
  # Establecer la propiedad nombreObjeto como privada.
  private $nombreObjeto = '';
	
  # Mostrar el nombre del objeto cuando se ejecute.
  public function __construct(){
	echo "<p><b>Se creo el objeto:</b> ";    
  }
	
  # Establecer el nombre del objeto.
  public function establecerNombreObjeto($nombre){
	$this->nombreObjeto = $nombre . "</p>";
  }
	
  # Obtener el valor de la propiedad $nombreObjeto.
  public function obtenerNombreObjeto(){
	echo $this->nombreObjeto;
  }
}

# Objeto: 1
$ObjetoUno = new Clase();
$ObjetoUno->establecerNombreObjeto('Objeto Uno');
$ObjetoUno->obtenerNombreObjeto();

# Objeto: 2
$ObjetoDos = new Clase();
$ObjetoDos->establecerNombreObjeto('Objeto Dos');
$ObjetoDos->obtenerNombreObjeto();

# Objeto: 3
$ObjetoTres = new Clase();
$ObjetoTres->establecerNombreObjeto('Objeto Tres');
$ObjetoTres->obtenerNombreObjeto();

# Objeto: 4
$ObjetoCuatro = new Clase();
$ObjetoCuatro->establecerNombreObjeto('Objeto Cuatro');
$ObjetoCuatro->obtenerNombreObjeto();

# Objeto: 5
$ObjetoCinco = new Clase();
$ObjetoCinco->establecerNombreObjeto('Objeto Cinco');
$ObjetoCinco->obtenerNombreObjeto();