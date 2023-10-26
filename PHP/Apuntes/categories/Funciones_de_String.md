## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Funciones de string
[![PHP](https://img.shields.io/badge/Funciones_de_String-c08a44?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funciones_de_String.md)

#### Listado completo de String Functions
[PHP - String Functions](https://www.php.net/manual/en/ref.strings.php)

#### Funciones más usadas
| Función  | Descripción  |
|:-:|---|
| **strlen()**  | Obtener la longitud de la cadena  |
| **str_word_count()**  | Cuenta el número de palabras en una cadena  |
| **strrev()**  | Invertir una cadena de texto |
| **strpos()**  | Buscar un texto específico dentro de una cadena. Devuelve la posición de la primera aparición del texto dentro de la cadena.   |
| **trim()**  | Elimina los espacios en blanco (u otros caracteres) del principio y el final de una cadena  |
| **substr()**  | Devuelve parte de una cadena  |
| **substr_replace()**  | Reemplazar texto dentro de una parte de una cadena  |
| **strtolower()**  | Poner una cadena en minúscula  |
| **strtoupper()**  | Poner una cadena en mayúsculas  |

#### Ejemplo de funciones de cadenas
```php
<?php 

$texto = ' Hola   Mundo ';

echo 'strlen($texto)<br>';
echo strlen($texto) . '<br><br>';

echo 'str_word_count($texto)<br>';
echo str_word_count($texto) . '<br><br>';

echo 'strrev($texto)<br>';
echo strrev($texto) . '<br><br>';

echo "strpos($texto,  'Hola')<br>";
echo strpos($texto, 'Hola') . '<br><br>';

echo 'trim($texto)<br>';
echo trim($texto) . '<br><br>';

echo 'substr($texto, 0, 4)<br>';
echo substr($texto, 0, 4) . '<br><br>';

echo 'substr_replace($texto, 0, 4)<br>';
echo substr_replace($texto, 'Adios', 0) . '<br><br>';

echo 'strtolower($texto)<br>';
echo strtolower($texto) . '<br><br>';

echo 'strtoupper($texto)<br>';
echo strtoupper($texto) . '<br><br>';
?>
```

[![PHP](https://img.shields.io/badge/Funciones_de_String-c08a44?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funciones_de_String.md)
