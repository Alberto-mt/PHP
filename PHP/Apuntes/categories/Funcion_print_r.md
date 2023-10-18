## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Función print_r
[![PHP](https://img.shields.io/badge/Funcion_print_r-44c04c?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funcion_print_r.md)

#### print_r()
Para imprimir un array en PHP. Esta función imprime o muestra un array, su índice/clave y valor. 
```php
<?php 
$array = array('manzana', 'pera', 'uva');
print_r($array);
echo "<br>";

$array_asosiativo = array('nombre' => 'Pepe', 'edad' => 23);
print_r($array_asosiativo);
echo "<br>";

echo "<br>##### Con etiqueta PRE";
echo "<pre>";
print_r($array);
print_r($array_asosiativo);
echo "</pre>";
?>
```
[![PHP](https://img.shields.io/badge/Funcion_print_r-44c04c?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funcion_print_r.md)
