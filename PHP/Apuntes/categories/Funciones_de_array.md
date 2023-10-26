## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Funciones de array
[![PHP](https://img.shields.io/badge/Funciones_de_array-44c04c?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funciones_de_array.md)

#### Listado completo de Array Functions
[PHP - Array Functions](https://www.php.net/manual/es/ref.array.php)

#### Funciones más usadas
| Función  | Descripción  |
|:-:|---|
| **array_pop()**  | Extrae el último elemento del final del array  |
| **array_push()**  | Inserta uno o más elementos al final de un array  |
| **array_replace()**  | Reemplaza los elementos del array original con elementos de array adicionales  |
| **array_reverse()**  | Devuelve un array con los elementos en orden inverso  |
| **array_search()**  | Busca un valor determinado en un array y devuelve la primera clave correspondiente en caso de éxito  |
| **array_shift()**  | Quita un elemento del principio del array  |
| **array_splice()**  | Elimina una porción del array y la reemplaza con otra cosa  |
| **array_unique()**  | Elimina valores duplicados de un array  |
| **array_unshift()**  | Añadir al inicio de un array uno a más elementos  |
| **count()**  | Cuenta todos los elementos de un array o algo de un objeto  |
| **rsort()**  | Ordena un array en orden inverso  |
| **sort ()**  | Ordena un array  |

#### Ejemplo de funciones de cadenas
```php
<?php
$semana = array(
	'Lunes', 'Martes', 'Miercoles',
 	'Jueves', 'Viernes', 'Sabado', 'Domingo'
);

$semana2 = array(
	'L', 'M', 'X','J', 'V', 'S', 'D'
);

$numeros = array(
	1,2,3,4,1,2,6,7,2,3,8,9
);

echo 'array_pop($semana)<br>';
echo array_pop($semana);
echo '<br><br>';

echo 'array_push($semana, "Domingo")<br>';
print_r($semana) . '<br>';
echo array_push($semana, "Domingo"). '<br>';
print_r($semana);
echo '<br><br>';

echo 'array_replace($semana2, $semana)<br>';
$semana2 = array_replace($semana2, $semana);
print_r($semana2);
echo '<br><br>';

echo 'array_reverse($semana)<br>';
print_r(array_reverse($semana));
echo '<br><br>';

echo 'array_search("Lunes", $semana)<br>';
print_r(array_search("Lunes", $semana));
echo '<br><br>';

echo 'array_shift($semana)<br>';
echo array_shift($semana);
echo '<br><br>';

echo 'array_unshift($semana, "Lunes")<br>';
print_r($semana) . '<br>';
echo array_unshift($semana, "Lunes"). '<br>';
print_r($semana);
echo '<br><br>';

echo 'array_splice($semana2, 2)<br>';
print_r($semana2);
echo '<br>';
array_splice($semana2, 2);
print_r($semana2);
echo '<br><br>';

echo 'array_unique($numeros)<br>';
print_r($numeros);
echo '<br>';
print_r(array_unique($numeros));
echo '<br><br>';

echo 'count($semana)<br>';
echo count($semana);
echo '<br><br>';

echo 'rsort($numeros)<br>';
rsort($numeros);
print_r($numeros);
echo '<br><br>';

echo 'sort($numeros)<br>';
sort($numeros);
print_r($numeros);
echo '<br><br>';
?>
```


[![PHP](https://img.shields.io/badge/Funciones_de_array-44c04c?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funciones_de_array.md)
