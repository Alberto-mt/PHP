## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### PHP 7 - Spaceship operator
[![PHP](https://img.shields.io/badge/PHP7_Spaceship_operator-447ac0?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Spaceship_operator.md)

#### Spaceship operator (<=>)
Es un operador de comparación de tres vías que se puede utilizar para comparar dos expresiones. Devuelve -1, 0 o 1 según la relación entre las dos expresiones.

El operador de nave espacial se puede utilizar con varios tipos de datos, incluidos números enteros, flotantes, cadenas, matrices y objetos.

Así es como funciona el operador de la nave espacial:

- Si el valor de la izquierda es menor que el valor de la derecha, devuelve -1.
- Si los valores de ambos lados son iguales, devuelve 0.
- Si el valor de la izquierda es mayor que el valor de la derecha, devuelve 1.

#### Ejemplo de Spaceship operator
```php
<?php
echo 1 <=> 1; // Outputs 0
echo "<br>";
echo 1 <=> 2; // Outputs -1
echo "<br>";
echo 2 <=> 1; // Outputs 1
echo '<br/><br/>';

echo "a" <=> "a"; // Outputs 0
echo "<br>";
echo "a" <=> "b"; // Outputs -1
echo "<br>";
echo "b" <=> "a"; // Outputs 1
?>
```

#### Ejemplo de ordenar un array con Spaceship operator
```php
<?php
$array = [3,1,5,2,4];

// Ordenar array con sort()
//sort($array);

// Ordenar array con spaceship operator
function comparar($a, $b){
	return $a <=> $b;
}
usort($array, 'comparar');

echo implode(' - ', $array);
?>
```

[![PHP](https://img.shields.io/badge/PHP7_Spaceship_operator-447ac0?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Spaceship_operator.md)
