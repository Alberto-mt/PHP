## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### PHP 7 - Operador de fusión null
[![PHP](https://img.shields.io/badge/PHP7_Operador_fusion_null-c08a44?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Operador_fusion_null.md)

#### Operador de fusión null(??)
Este operador se representa con dos signos de interrogación (??) y se utiliza para devolver el primer valor que no sea nulo de una serie de operandos.

#### Ejemplo de ??
```php
<?php
// La variable es null
$tipoPase = null;
$pase = $tipoPase ?? 'no-autorizado';
echo "{$pase}<br><br>";

// La variable tiene valor
$tipoPase2 = 'VIP';
$pase2 = $tipoPase2 ?? 'no-autorizado';
echo $pase2; 
?>
```

#### Ejemplo de ?? al comprobar parametros
```php
<?php
// Antes
// $rol = isset($_GET['rol']) ? $_GET['rol'] : 'usuario base';

// Ahora 
$rol = $_GET['rol'] ?? 'usuario base';

echo $rol;
?>
```

[![PHP](https://img.shields.io/badge/PHP7_Operador_fusion_null-c08a44?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Operador_fusion_null.md)
