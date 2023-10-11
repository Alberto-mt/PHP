## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Longitud de array - Count()
[![PHP](https://img.shields.io/badge/Longitud_array_Count-447ac0?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Longitud_array_count.md)

#### count()
Función en PHP se utiliza para contar la cantidad de elementos en un array
```php
<?php 
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

// Elementos de un array
echo count($meses) . '<br />';

// Acceder al valor del ultimo elemento
$ultimo_mes = count($meses) - 1;
echo $meses[$ultimo_mes];
?>
```

[![PHP](https://img.shields.io/badge/Longitud_array_Count-447ac0?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Longitud_array_count.md)
