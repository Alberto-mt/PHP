## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Var_dump
[![PHP](https://img.shields.io/badge/Funcion_var_dump-c08a44?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funcion_var_dump.md)

#### var_dump()
Se utiliza para mostrar el contenido y el tipo de datos de una variable o una expresión. Se utiliza con fines de depuración para inspeccionar los valores de variables y objetos. Para que el resultado sea más legible se puede envolver con la etiqueta <pre>
```php
<?php 
$string = 'Pepe';
var_dump($string);
echo "<br>";

$entero = 23;
var_dump($entero);
echo "<br>";

$enteroString = '23';
var_dump($enteroString);
echo "<br>";

$array = array('manzana', 'pera', 'uva');
var_dump($array);
echo "<br>";

$array_asosiativo = array('nombre' => 'Pepe', 'edad' => 23);
var_dump($array_asosiativo);
echo "<br>";

$boolean = true;
var_dump($boolean);
echo "<br>";

echo "<br>##### Con etiqueta PRE";
echo "<pre>";
var_dump($string, $entero, $enteroString, $array, $array_asosiativo, $boolean);
echo "</pre>";
?>
```

[![PHP](https://img.shields.io/badge/Funcion_var_dump-c08a44?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funcion_var_dump.md)
