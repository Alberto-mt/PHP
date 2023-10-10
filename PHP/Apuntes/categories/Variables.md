## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Variables
[![PHP](https://img.shields.io/badge/Variables-447ac0?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Variables.md)

#### Sintaxis y convenciones de nomenclatura
Una variable en PHP comienza con un signo de dólar ($) seguido del nombre de la variable.

Los nombres de variables deben comenzar con una letra o un carácter de subrayado. Pueden contener letras, números y guiones bajos. Los nombres de las variables distinguen entre mayúsculas y minúsculas.

#### Tipos de datos
| Tipo  | Descripción  |
|:-:|---|
| **String**  | Cadena de caracteres  |
| **Integer**  | Números enteros  |
| **Double**  | Números con decimales  |
| **Boolean**  | Verdadero o Falso (true/false)  |
| **Array**  | Permiten almacenar múltiples valores en una sola variable  |
| **Object**  | Permiten crear estructuras de datos más complejas  |
| **Class**  | Clase  |
| **Null**  | Variable sín valor asignado  |

#### Ejemplo de variables
```php
// String
$nombre = "Pepe";
echo $nombre;
echo ' - ';
echo gettype($nombre);
echo '<br>';

// Integer
$edad = 23;
echo $edad;
echo ' - ';
echo gettype($edad);
echo '<br>';

// Boolean
$validacion = true;
echo $validacion;
echo ' - ';
echo gettype($validacion);
```

#### Variables y tipos de comillas
Con comillas dobles podemos llamar variables dentro de un string, en ciertas situaciones pueden provocar problemas de seguridad.

Con comillas simples NO podemos llamar variables dentro de un string, hay que concatenar.
```php
// Comillas sencillas
echo 'Alumno: ' . $nombre;
echo '<br>';
// Comillas dobles
echo "Alumno: $nombre";
```

[![PHP](https://img.shields.io/badge/Variables-447ac0?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Variables.md)
