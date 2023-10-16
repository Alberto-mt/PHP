## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Bucle while
[![PHP](https://img.shields.io/badge/Bucle_while-44c04c?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Bucle_while.md)

#### Bucle while
- En php
```php
<?php
// inicialización

// while(condición){
	// Código que se ejecuta

 	// incremento/decremento
// }


$i = 0;

while($i <= 100){
	echo $i . "<br />";

	$i += 5;
}
?>
```

#### Ejemplo de recorrer array con bucle while
```php
<?php
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

// echo count($meses);

$i = 0;
while($i < count($meses)){
	echo $meses[$i]. '<br />';

	$i++;
}
?>
```

[![PHP](https://img.shields.io/badge/Bucle_while-44c04c?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Bucle_while.md)
