## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Arrays multidimensionales
[![PHP](https://img.shields.io/badge/Arrays_multidimensionales-447ac0?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Arrays_multidimensionales.md)

#### Definición
Un array multidimensional en PHP es un array que contiene uno o más arrays.

PHP admite arrays multidimensionales que pueden tener dos, tres, cuatro, cinco o más niveles de profundidad. Sin embargo, los arrays de más de tres niveles de profundidad pueden resultar difíciles de gestionar para la mayoría de las personas.

#### Declaración y Acceso
```php
<?php 
// Definición
$alumnos = array(
	array('Pepe', 'DAW'),
	array('Luis', 'DAM'),
	array('Ana', 'ASIR')
);


// Acceso
echo $alumnos[0][0] . ' - ' . $alumnos[0][1] . '<br />';
echo $alumnos[1][0] . ' - ' . $alumnos[1][1] . '<br />';
echo $alumnos[2][0] . ' - ' . $alumnos[2][1] . '<br />';
?>
```

[![PHP](https://img.shields.io/badge/Arrays_multidimensionales-447ac0?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Arrays_multidimensionales.md)
