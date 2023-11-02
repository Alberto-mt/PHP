## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### PHP 7 - Declaraciones tipo escalar
[![PHP](https://img.shields.io/badge/PHP7_Declaraciones_tipo_escalar-c044b8?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Declaraciones_tipo_escalar.md)

#### declare(strict_types=1)
La declaración declare(strict_types=1) en PHP se utiliza para habilitar el modo estricto de tipos en un archivo. Cuando se habilita el modo estricto de tipos, PHP realiza comprobaciones más rigurosas en la asignación de tipos de datos, lo que ayuda a prevenir errores y mejorar la seguridad del código.

#### Ejemplo de declaración de tipo escalar
```php
<?php
declare(strict_types=1);

// Error: la función pide un número entero y es un string
// $edad = "20";

// Correcto: Es un número entero
$edad = 20;

function edadFinalCurso(int $edad){
	return $edad + 2;
}

echo  "Empezando DAW con {$edad} años, finalizará con " .  edadFinalCurso($edad) . " años";
?>
```

[![PHP](https://img.shields.io/badge/PHP7_Declaraciones_tipo_escalar-c044b8?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Declaraciones_tipo_escalar.md)
