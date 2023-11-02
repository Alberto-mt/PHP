## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### PHP 7 - Declaraciones tipo devolución
[![PHP](https://img.shields.io/badge/PHP7_Declaraciones_tipo_devolucion-447ac0?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Declaraciones_tipo_devolucion.md)

#### declare(strict_types=1)
La declaración declare(strict_types=1) en PHP se utiliza para habilitar el modo estricto de tipos en un archivo. Cuando se habilita el modo estricto de tipos, PHP realiza comprobaciones más rigurosas en la asignación de tipos de datos, lo que ayuda a prevenir errores y mejorar la seguridad del código.

#### Ejemplo de declaración de tipo devolución
```php
<?php
declare(strict_types=1);

function getEdad() : int{
	// Error: ya que debe devolver un número entero
	// $edad = "30";

	// Correcto: devuelve un número entero
	$edad = 30;

	return $edad;
}

echo getEdad();
?>
```

[![PHP](https://img.shields.io/badge/PHP7_Declaraciones_tipo_devolucion-447ac0?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Declaraciones_tipo_devolucion.md)
