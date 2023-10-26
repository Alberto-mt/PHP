## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Funciones matemáticas
[![PHP](https://img.shields.io/badge/Funciones_matematicas-447ac0?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funciones_matematicas.md)

#### Listado completo de Math Functions
[PHP - Math Functions](https://www.php.net/manual/en/ref.math.php)

#### Funciones más usadas
| Función  | Descripción  |
|:-:|---|
| **abs()**  | Devuelve el valor absoluto (positivo) de un número  |
| **ceil()**  | Redondea un número al entero más cercano  |
| **decbin()**  | Convierte un número decimal a binario  |
| **dechex()**  | Convierte un número decimal a hexadecimal  |
| **decoct()**  | Convierte un número decimal a octal  |
| **floor()**  | Redondea un número al entero más cercano  |
| **pi()**  | Devuelve el valor de PI  |
| **rand()**  | Genera un número aleatorio  |
| **round()**  | Redondea un número de punto flotante a su entero más cercano  |
| **sqrt()**  | Devuelve la raíz cuadrada de un número  |

#### Ejemplo de funciones matemáticas
```php
<?php 
$num_negativo = -23.175;
$num = 23.175;
$num2 = 255;

echo 'abs()<br>';
echo abs($num_negativo);
echo '<br><br>';

echo 'ceil()<br>';
echo ceil($num);
echo '<br><br>';

echo 'decbin()<br>';
echo decbin($num2);
echo '<br><br>';

echo 'dechex()<br>';
echo dechex($num2);
echo '<br><br>';

echo 'decoct()<br>';
echo decoct($num2);
echo '<br><br>';

echo 'floor()<br>';
echo floor($num);
echo '<br><br>';

echo 'pi() - ó - M_PI<br>';
echo pi();
echo '<br>';
echo M_PI;
echo '<br><br>';

echo 'rand()<br>';
echo rand(1,50);
echo '<br><br>';

echo 'round()<br>';
echo round($num, 2);
echo '<br><br>';

echo 'sqrt()<br>';
echo sqrt($num);
echo '<br><br>';
?>
```

[![PHP](https://img.shields.io/badge/Funciones_matematicas-447ac0?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funciones_matematicas.md)
