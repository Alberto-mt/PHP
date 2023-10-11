## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Arrays asociativos
[![PHP](https://img.shields.io/badge/Arrays_asociativos-44c04c?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Arrays_asociativos.md)

#### Definición
PHP admite arrays asociativos, donde se usan claves de cadena en lugar de claves numéricas

#### Declaración y acceso
- Declaración y acceso tipo 1:
```php
<?php 
// Declaración
$alumno = array(
    "nombre" => "Pepe",
    "edad" => 23,
    "clase" => "DAW"
);

// Acceso
echo $alumno["nombre"] . '<br />';
echo $alumno["edad"] . '<br />';
echo $alumno["clase"] . '<br />';
?>
```
- Declaración y acceso tipo 2:
```php
<?php 
// Declaración
$alumno = [
    "nombre" => "Pepe",
    "edad" => 23,
    "clase" => "DAW"
];

// Acceso
echo $alumno["nombre"] . '<br />';
echo $alumno["edad"] . '<br />';
echo $alumno["clase"] . '<br />';
?>
```

[![PHP](https://img.shields.io/badge/Arrays_asociativos-44c04c?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Arrays_asociativos.md)
