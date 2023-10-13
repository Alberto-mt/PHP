## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Ordenar array
[![PHP](https://img.shields.io/badge/Ordenar_array-44c04c?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Ordenar_array.md)

#### Funciones integradas en PHP para ordenar arrays
| Tipo  | Descripción  |
|:-:|---|
| **sort(array)**  | Ordena el array en orden ascendente según los valores. Reordena los elementos del array y actualiza el array original  |
| **rsort(array)**  | Ordena el array en orden descendente según los valores. Reordena los elementos del array y actualiza el array original  |
| **asort(array)**  | Ordena el array asociativo en orden ascendente según los valores, manteniendo las asociaciones clave-valor  |
| **ksort(array)**  | Ordena el array asociativo en orden ascendente según las claves, manteniendo las asociaciones clave-valor  |
| **arsort(array)**  | Ordena el array asociativo en orden descendente según los valores, manteniendo las asociaciones clave-valor  |
| **krsort(array)**  | Ordena el array asociativo en orden descendente según las claves, manteniendo las asociaciones clave-valor  |

#### Ejemplo de funciones integradas en PHP para ordenar arrays
```php
<?php 
$frutas = array("pera", "uva", "manzana");
$alumnos = array("Peper"=>"21", "Violeta"=>"23", "Eva"=>"19");

// sort()
echo 'sort()</br>';
sort($frutas);

foreach($frutas as $value){
	echo $value . '</br>';
}
echo '</br>';

// rsort()
echo 'rsort()</br>';
rsort($frutas);

foreach($frutas as $value){
	echo $value . '</br>';
}
echo '</br>';


// asort()
echo 'asort()</br>';
asort($alumnos);

foreach($alumnos as $key =>$value){
	echo $key . ": " . $value . '</br>';
}
echo '</br>';

// ksort()
echo 'ksort()</br>';
ksort($alumnos);

foreach($alumnos as $key =>$value){
	echo $key . ": " . $value . '</br>';
}
echo '</br>';

// arsort()
echo 'arsort()</br>';
arsort($alumnos);

foreach($alumnos as $key =>$value){
	echo $key . ": " . $value . '</br>';
}
echo '</br>';

// krsort()
echo 'krsort()</br>';
krsort($alumnos);

foreach($alumnos as $key =>$value){
	echo $key . ": " . $value . '</br>';
}
echo '</br>';
?>
```

[![PHP](https://img.shields.io/badge/Ordenar_array-44c04c?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Ordenar_array.md)
