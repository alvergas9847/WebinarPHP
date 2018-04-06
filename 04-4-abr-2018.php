<?php

/**
  * Ejercicio:
  * 
  * 1. Crear 5 métodos públicos en la clase padre.
  * 2. Crear 5 métodos protegidos en la clase padre.
  * 3. Crear 5 métodos privados en la clase padre.
  *
  * Explicar en los comentarios por que consideras que son de cierto alcance.
  * 
  * Autor: 358b06c6
  * Fecha de la Clase: 04/04/2018
  * 
  * Ejercicio de la clase en vivo: https://www.facebook.com/ComunidadDePeHPe/videos/1488274731282652/
  *
*/

class SmartPhone{

	# Métodos Públicos.

	public function comprobarVariable($variable, $msjVarVacia, $msjVarDefinida){

		if (!empty($variable)) {

			$msjVarDefinida;
			return $msjVarDefinida;

		}elseif(empty($variable)){

			$msjVarVacia;
			return $msjVarVacia;

		}
	}
	
	public function accederMetodoPrivado($metodo, $parametro){

		echo $this->$metodo($parametro);
	}

	public function obtenerHora($hora){

		$msjVarDefinida = '<p><b>La hora exacta es: </b>'. $hora . '</p>';
		$msjVarVacia = '<p><b>La hora exacta es:</b> La hora no esta configurada.</p>';


		return $this->comprobarVariable($hora, $msjVarVacia, $msjVarDefinida);

	}
	
	public function obtenerFecha($fecha){

		$msjVarDefinida = '<p><b>La fecha actual es:</b> La fecha no esta configurada.</p>';
		$msjVarVacia = '<p><b>La fecha actual es: </b>'. $fecha . '</p>';

		return $this->comprobarVariable($fecha, $msjVarVacia, $msjVarDefinida);

	}
	
	public function obtenerOperadora($operadora){

		$msjVarDefinida = '<p><b>La operadora es: </b>'. $operadora . '</p>';
		$msjVarVacia = '<p><b>La operadora actual es:</b> No se detecto tarjeta SIM.</p>';

		return $this->comprobarVariable($operadora, $msjVarVacia, $msjVarDefinida);

	}
	
	public function obtenerCobertura($cobertura){
		$msjVarDefinida = '<p><b>Cobertura: </b>'. $cobertura .'</p>';
		$msjVarVacia = '<p><b>Cobertura:</b> Solo llamadas de emergencia.</p>';

		return $this->comprobarVariable($cobertura, $msjVarVacia, $msjVarDefinida);
		
	}
	
	public function obtenerPorcentajeBateria($porcentaje){

		$msjVarDefinida = '<p><b>Porcentaje de la batería: </b>'. $porcentaje .'</p>';
		$msjVarVacia = '<p><b>Porcentaje de la batería: </b> 0%</p>';

		return $this->comprobarVariable($porcentaje, $msjVarVacia, $msjVarDefinida);
		
	}
	
	# Métodos Protegidos.
	
	protected function realizarLlamada($numero){

		$msjVarDefinida = '<p><b>Llamando al... </b>'. $numero .'</p>';
		$msjVarVacia = '<p><b>Llamando al... </b>El número que marcaste es incorrecto, porfavor confirmalo e intentalo nuevamente</p>';

		return $this->comprobarVariable($numero, $msjVarVacia, $msjVarDefinida);
		
	}
	
	protected function enviarMensajeSMS($mensaje, $numero){

		$msjVarDefinida = '<p><b>Enviando mensaje...</b> Mensaje enviado correctamente</p>';
		$msjVarVacia = '<p><b>Enviando mensaje...</b> Error al enviar, el número del destinatario no es válido.</p>';

		return $this->comprobarVariable($numero, $msjVarVacia, $msjVarDefinida);
		
	}
	
	protected function consultarCorreoElectronico($email, $password){

		if (!empty($email) && !empty($password)) {

			$mensaje = '<p><b>Consultando Email:</b> Has iniciado sesion correctamente, no se encontraron nuevos mensajes.</p>';
			return $mensaje;

		}else{

			$mensaje = '<p>La direccion de correo electrónico y/o la contraseña no son válidas.</p>';
			return $mensaje;

		}
		
	}
	
	protected function tomarFotografia(){

		$mensaje = '<p>La fotografía se a guardado en la memoria externa.</p>';

		return $mensaje;

	}
	
	protected function crearAlarma($alarma){
		$msjVarDefinida = '<p><b>Se ha definido una alarma a las:</b>' . $alarma . '</p>';
		$msjVarVacia = '<p><b>Creando alarma:</b> No definiste una hora para la alarma</p>';

		return $this->comprobarVariable($alarma, $msjVarVacia, $msjVarDefinida);
	}
	
	# Métodos Privados
	
	private function comprarAplicacion($comprarAplicacion){

		$msjVarDefinida = '<p>Usted ha cobrado la aplicación: ' . $comprarAplicacion . '</p>';
		$msjVarVacia = '<p>El método de pago no es válido, intente con otra forma de pago.</p>';

		return $this->comprobarVariable($comprarAplicacion, $msjVarVacia, $msjVarDefinida);
		
	}	
	
	private function descargarAplicacion($descargarAplicacion){

		$msjVarDefinida = '<p><b>Descargando aplicación... </b>'. $descargarAplicacion .'</p>';
		$msjVarVacia = '<p><b>Descargando aplicación...</b> Error al descargar la aplicación, intente más tarde.</p>';

		return $this->comprobarVariable($descargarAplicacion, $msjVarVacia, $msjVarDefinida);
		
	}
	
	private function instalarAplicacion($instalarAplicacion){

		$msjVarDefinida = '<p><b>Se instalo... </b>'. $instalarAplicacion .'</p>';
		$msjVarVacia = '<p><b>Instalando... </b> Error al instalar la aplicación intente más tarde.</p>';

		return $this->comprobarVariable($instalarAplicacion, $msjVarVacia, $msjVarDefinida);
	}
	
	private function permitirObtenerUbicacion($permiso = false){
		
		if($permiso){

			echo '<p><b>¿Permitir ubicación?</b> Has concedido a las aplicaciones de tu smartphone acceder a tu ubicación.</p>';

		}else{

			echo '<p><b>¿Permitir ubicación?</b> Has desactivado los servicios de ubicación de tu teléfono.</p>';

		}

	}
	
	private function conectarDispositivoBluetooth($dispositivo){

		$msjVarDefinida = '<p><b>Buscando dispositivo...</b> Su dispositivo se ha emparejado con:'. $dispositivo .'</p>';
		$msjVarVacia = '<p>Buscando dispositivo... <b>No se encontro ningun dispositivo Bluetooth</p>';

		return $this->comprobarVariable($dispositivo, $msjVarVacia, $msjVarDefinida);
	}
	
}

class iPhone extends SmartPhone{

	/**
	  * Explicación:
	  *
	  * El objeto 'iPhoneX' es una instancia de la clase hijo (iPhone),
	  * por lo que hereda los métodos de la clase padre (SmartPhone).
	  *
	  * Entonces para heredar de SmartPhone creo los métodos que quiero heredar,
	  * les pongo el mismo nombre y cuando los ejecuto mando a llamar al método
	  * en la clase padre.
	  *
	*/	
	
	public function obtenerHora($hora){
		echo parent::obtenerHora($hora);
	}

	public function obtenerFecha($fecha){
		echo parent::obtenerFecha($fecha);
	}

	public function obtenerOperadora($operadora){
		echo parent::obtenerOperadora($operadora);
	}

	public function obtenerCobertura($cobertura){
		echo parent::obtenerCobertura($cobertura);
	}

	public function obtenerPorcentajeBateria($porcentaje){
		echo parent::obtenerPorcentajeBateria($porcentaje);
	}
	
	public function realizarLlamada($numero){
		echo parent::realizarLlamada($numero);
	}

	public function instalarAplicacion($instalarAplicacion){
		echo parent::instalarAplicacion($instalarAplicacion);
	}
}

/*======================================================
=               Creando el objeto iPhoneX              =
======================================================*/

$iPhoneX = new iPhone();

/*======================================================
=            Accediendo a un método público            =
======================================================*/

/**
 * Métodos Públicos:
 *
 * Se definen anteponiendo la palabra clave public al nombre del atributo o método.
 * Éstas, pueden ser accedidas desde cualquier parte de la aplicación, sin restricción.
 *
*/	

echo '<h2>Mostrar la hora actual</h2>';
$iPhoneX->obtenerHora('5:36 p.m');

/*========================================================
=            Accediendo a un método protegido            =
========================================================*/

/**
 * Métodos Protegidos:
 *
 * Se definen anteponiendo la palabra clave protected al nombre del atributo o método. Pueden ser accedidos por la 
 * propia clase que los definió, así como por las clases que la heredan, pero no, desde otras partes de la 
 * aplicación.
 *
*/	

echo '<h2>Realizar Llamada</h2>';
$iPhoneX->realizarLlamada(987654321);

/*======================================================
=            Accediendo a un método privado            =
======================================================*/

/**
 * Métodos Privados:
 *
 * Se definen anteponiendo la palabra clave private al nombre del atributo ó método.
 * Éstos solo pueden ser accedidos por la clase que los definió.
 *
 * En este caso tendría no puedo llamar directamente al método privado,
 * tendría que llamarlo a través de un método público.
 *
*/

echo '<h2>Instalando una aplicación</h2>';
$iPhoneX->accederMetodoPrivado($metodo = 'instalarAplicacion', $aplicación = 'Agry Birds');

echo '<h2>Ubicación</h2>';
$iPhoneX->accederMetodoPrivado($metodo = 'permitirObtenerUbicacion', $permiso = true);