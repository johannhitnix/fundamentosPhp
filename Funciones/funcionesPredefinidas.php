<?php
// **FUNCIONES PREDEFINIDAS**
echo '<h2>FUNCIONES PREDEFINIDAS</h2>';
// Debugger
$nombre = "Johann Belosareos";
var_dump($nombre);

// Fechas
echo date('Y-m-d');

echo "<br>";
echo time();

// MATH
echo "<br>";

echo "<br>";
echo 'Raiz cuadrada de 10 es: ' . sqrt(10);
echo "<br>";
echo 'Un numero aleatorio entre 10 y 40: ' . rand(10, 40);
echo "<br>";
echo 'Numero pi: ' . pi();
echo "<br>";
echo 'Redondear demcimal: ' . round(pi(), 2);

// **MAS FUNCIONES GENERALES**
echo '<h2>MAS FUNCIONES GENERALES</h2>';

// --DETECTAR TIPADO--

// --gettype: obtiene el tipo de dato de la variable
echo '<br>';
echo gettype($nombre);

// --is_string: verifica si es un string
echo '<br>';
if (is_string($nombre)) {
    echo "La variable es un string";
}

// --is_float: verifica si es un float
echo '<br>';
if (!is_float($nombre)) {
    echo "La variable no es un float";
}

// --FIN DETECTAR TIPADO--

// --isset: comprueba si una variable existe
echo '<br>';
if (isset($edad)) {
    echo "la variable existe <br>";
} else {
    echo "la variable no existe <br>";
}


// --unset: elimina variables e indices
$year = 2020;
unset($year);
// var_dump($year);

// --empty: detecta si la variable esta vacia, es NULL, o es FALSE

$texto = TRUE;
if (empty($texto)) {
    echo "la variable esta vacia";
} else{
    echo "la variable tiene contenido";
}

// --METODOS STRING--

// --trim: recorta los espacios antes y despues del string
echo '<br>';
$frase = "      hola soy johann :)   ";
var_dump(trim($frase));

// --strlen: cuenta caracteres de un string
$cadena = "ñlkdjfslkd";
echo "la candidad de caracteres de la cadena <strong>$cadena</strong> es: " . strlen($cadena);

// --strpos: revela la posicion del substring
echo '<br>';
$pajar = "La vida es Bella";
$aguja = "vida";
echo strpos($pajar, $aguja);

// --strlreplace: reemplaza un substring dentro de un stringf
echo '<br>';
$reemplazo = "moto";
echo str_replace($aguja, $reemplazo, $pajar);

// MAYUSCULAS y minusculas
echo '<br>';
echo strtolower($pajar);
echo '<br>';
echo strtoupper($pajar);

// --FIN METODOS STRING--