## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Función extract (valores de array asociativo)
[![PHP](https://img.shields.io/badge/Funcion_extract-447ac0?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funcion_extract.md)

#### extract()
Se utiliza para importar variables desde un array. Asigna las claves del array como nombres de variables y sus valores correspondientes como valores de variables. 
```php
<?php 
// Valor original de la variable
$clase = 'ASIR';
echo $clase . '<br>';

// Array asociativo
$alumno = array('nombre' => 'Pepe', 'clase' => 'DAW');
echo '<pre>';
print_r($alumno);
echo '</pre>';

// Extract del array alumno
extract($alumno);

// Valor final de la variable
echo $clase;
?>
```

[![PHP](https://img.shields.io/badge/Funcion_extract-447ac0?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funcion_extract.md)
