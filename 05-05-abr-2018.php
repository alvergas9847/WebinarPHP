<?php

/**
  * Ejercicio:
  * 
  * 1. Hacer los métodos de operaciones básicas (suma, resta, multiplicación y división).
  * 2. Los métodos deberán poder recibir hasta 5 elementos para las operaciones.
  * 
  * Autor: 358b06c6
  * Fecha: 5/04/2018
  * 
  * Ejercicio de la clase en vivo: https://www.facebook.com/ComunidadDePeHPe/videos/1488275151282610/
  *
*/

Class ElPadre{

	public function metodoDelPadre(){
		echo 'Desde el padre';
	}

}

Class ElHijo extends ElPadre{
	public function metodoDelPadre(){

		echo 'Desde el hijo';

	}

	public function otroMetodo(){
		parent::metodoDelPadre();
	}
}

// $objeto = new ElHijo();
// $objeto->otroMetodo();

/*========================================
=            Clases Estáticas            =
========================================*/

Class OtraClase{
	public static function metodoSinObjeto(){
		echo "Sin objeto";
	}
}

//otraClase::metodoSinObjeto();

/*=========================================
=            Clase Operaciones            =
=========================================*/

Class OperacionesAritmeticas{

	public function suma($valor1 = 0, $valor2 = 0, $valor3 = 0, $valor4 = 0, $valor5 = 0){

		$suma = $valor1 + $valor2 + $valor3 + $valor4 + $valor5;
		return $suma;

	}

	public function resta($valor1 = 0, $valor2 = 0, $valor3 = 0, $valor4 = 0, $valor5 = 0){

		$resta = $valor1 - $valor2 - $valor3 - $valor4 - $valor5;
		return $resta;

	}

	public function multiplicacion($valor1 = 1, $valor2 = 1, $valor3 = 1, $valor4 = 1, $valor5 = 1){

		$multiplicacion = $valor1 * $valor2 * $valor3 * $valor4 * $valor5;
		return $multiplicacion;

	}

	public function division($valor1 = 0, $valor2 = 0, $valor3 = 0, $valor4 = 0, $valor5 = 0){

		$division = $valor1 / $valor2 / $valor3 / $valor4 / $valor5;
		return $division;

	}

}

$objetoOperaciones = new OperacionesAritmeticas();

echo 'El resultado de la suma es: ' . $objetoOperaciones->suma(7, 3, 1, 9, 5) . '<br />';
echo 'El resultado de la resta es: ' .$objetoOperaciones->resta(4, 8) . '<br />';
echo 'El resultado de la multiplicacion es: ' . $objetoOperaciones->multiplicacion(7, 9) . '<br />';
echo 'El resultado de la división es: ' . $objetoOperaciones->division(7, 3, 1, 9, 5) . '<br />';