## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Bucle for
[![PHP](https://img.shields.io/badge/Bucle_for-c08a44?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Bucle_for.md)

#### Bucle for
- En php
```php
<?php
// for (inicialización; condición; incremento/decremento) {
    // Código que se ejecuta
// }

for($i = 0 ; $i <= 100 ; $i += 5 ){
	echo $i . "<br />";
}
?>
```

#### Ejemplo de recorrer array con bucle for
```php
<?php
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

// echo count($meses);

for($i = 0; $i < count($meses); $i++){
	echo $meses[$i] . '<br />';
}
?>
```

[![PHP](https://img.shields.io/badge/Bucle_for-c08a44?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Bucle_for.md)
