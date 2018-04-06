<?php

/*
 * Definición de 'echo'
 *
 * Es un constructor de lenguaje, no es una función.
 *
 * echo no es realmente una función (es una construcción del lenguaje), por lo que no se requiere el uso de 
 * paréntesis con él. echo (a diferencia de otras construcciones del lenguaje) no se comporta como una función, es 
 * decir no siempre se puede usar en el contexto de una función. Además, si se quiere pasar más de un parámetro a 
 * echo, éstos no deben estar entre paréntesis.
 *
 * Fuente: http://php.net/manual/es/function.echo.php
*/

/*
 * Funciones vs constructores de lenguaje
 *
 * La primera gran diferencia es que  print_r y var_dump son funciones reales mientras que echo y print son
 * constructores de lenguaje, no son verdaderamente funciones. Los constructores de lenguaje son partes de un
 * programa formados por uno o varios símbolos léxicos que responden a las reglas del lenguaje de programación; como 
 * símbolos léxicos, no se pueden descomponer en otros, es decir, un constructor de lenguaje no puede subdividirse en
 * otros constructores. Por su parte, una función es una parte definida de un programa (no del lenguaje de 
 * programación) que realiza una determinada tarea. Cada lenguaje de programación suele proveer de una biblioteca de
 * funciones predefinidas, como es el caso de print_r y var_dump en PHP.
 *
 *
 * Cuándo el parser interpreta un código, entiende y sabe que hacer con los constructores de lenguaje sin necesidad 
 * de más análisis. Cuándo se encuentra con una función, por el contrario, tiene que comprobar las definiciones del 
 * leguanje de programación y convertir el código de la función a constructores de lenguaje.
 *
 * Fuente: https://cybmeta.com/php-diferencias-entre-echo-print-print_r-y-var_dump 
*/

# Variable que contiene en saludo.
$saludo = 'Hola,';

# Variables con la información del usuario.
$nombre = '358b06c6';

# Salida de PHP hacía el navegador.
echo '<h3>Comillas dobles vs Comillas simples</h3>';
echo "<p>La diferencia entre utilizar comillas dobles y comillas simples,".
  "es que al utilizar las comillas dobles se interpretan las variables que contenga entre las comillas.".
  "Mientras que las comillas simples interpreta literalmente lo que esta dentro de las comillas.</p>";

echo '<h4>Ej. de comillas dobles.</h4>';
echo "<p>¡Hola, $nombre!</p>";

echo '<h4>Ej. de comillas simples.</h4>';
echo '<p>¡Hola, $nombre!</p>';
