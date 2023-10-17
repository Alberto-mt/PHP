## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Bucle do-while
[![PHP](https://img.shields.io/badge/Bucle_do_while-447ac0?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Bucle_do_while.md)

#### Bucle do-while
- En php
```php
<?php
// inicialización

// do {
	// Código que se ejecuta

	// incremento/decremento

// } while(condición);

$i = 0;

do {
	echo $i . "<br />";

	$i += 5;

} while($i <= 100);
?>
```

#### Ejemplo de recorrer array con bucle do-while
```php
<?php
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

// echo count($meses);

$i = 0;

do {
	echo $meses[$i]. '<br />';

	$i++;

} while($i < count($meses));
?>
```

[![PHP](https://img.shields.io/badge/Bucle_do_while-447ac0?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Bucle_do_while.md)
