## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Arrays
[![PHP](https://img.shields.io/badge/Arrays-c08a44?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Arrays.md)

#### Definición
Es una variable especial que puede contener múltiples valores bajo un solo nombre.
Es una estructura de datos que le permite almacenar y acceder a múltiples valores utilizando una sola variable.

#### Array indexado
Son arreglos con un índice numérico. Los valores se almacenan y se accede a ellos de forma lineal.
- Declaración y acceso tipo 1:
```php
<?php
// Declaración
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

// Acceso
echo $semana[0] . '<br />';
echo $semana[1] . '<br />';
echo $semana[2] . '<br />';
echo $semana[3] . '<br />';
echo $semana[4] . '<br />';
echo $semana[5] . '<br />';
echo $semana[6] . '<br />';
?>
```
- Declaración y acceso tipo 2:
```php
<?php
// Declaración
$semana = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

// Acceso
echo $semana[0] . '<br />';
echo $semana[1] . '<br />';
echo $semana[2] . '<br />';
echo $semana[3] . '<br />';
echo $semana[4] . '<br />';
echo $semana[5] . '<br />';
echo $semana[6] . '<br />';
?>
```

#### Funciones de arrays
| Función  | Descripción  |
|:-:|---|
| **count()**  | Devuelve el número de elementos de un array  |
| **array_push()**  | Agrega uno o más elementos al final de un array  |
| **array_pop()**  | Elimina y devuelve el último elemento de un array  |
| **array_merge()**  | Combina dos o más arrays en una sola matriz  |
| **array_search()**  | Busca en un array un valor específico y devuelve la clave correspondiente si la encuentra  |
| **empty($array)**  | Para comprobar si una matriz está vacía  |


[![PHP](https://img.shields.io/badge/Arrays-c08a44?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Arrays.md)
