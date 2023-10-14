## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Condicionales if - elseif - else
[![PHP](https://img.shields.io/badge/Condicional_if_else-447ac0?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Condicional_if_else.md)

#### Condicional if
- En php
```php
<?php
const CONDICION1 = true;

if (CONDICION1) {
    echo "Se ejecuta porque la CONDICION1 es true <br>";
}
?>
```
- Dentro de html
```html
<html>
<body>

<?php
const CONDICION1 = true
?>
<?php if (CONDICION1): ?>
    <p>Se ejecuta porque la CONDICION1 es true</p>
<?php endif; ?>
</body>
</html>
```

#### Condicional if - else
- En php
```php
<?php
const CONDICION1 = false;

if (CONDICION1) {
    echo "Se ejecuta porque la CONDICION1 es true <br>";
} else {
    echo "Se ejecuta porque la CONDICION1 es false <br>";
}
?>
```
- Dentro de html
```html
<html>
<body>

<?php
const CONDICION1 = false;
?>

<?php if ($CONDICION1): ?>
    <p>Se ejecuta porque la CONDICION1 es true</p>
<?php else: ?>
    <p>Se ejecuta porque la CONDICION1 es false</p>
<?php endif; ?>

</body>
</html>
```

#### Condicional if - elseif - else
- En php
```php
<?php
const CONDICION1 = false;
const CONDICION2 = true;

if (CONDICION1) {
    echo "Se ejecuta porque la CONDICION1 es true <br>";
} elseif (CONDICION2) {
    echo "Se ejecuta porque la CONDICION1 es false y la CONDICION2 es true <br>";
} else {
    echo "Se ejecuta porque la CONDICION1 y CONDICION2 es false <br>";
}
?>
```
- Dentro de html
```html
<html>
<body>

<?php
const CONDICION1 = false;
const CONDICION2 = true;
?>

<?php if (CONDICION1): ?>
    <p>Se ejecuta porque la CONDICION1 es true</p>
<?php elseif (CONDICION2): ?>
    <p>Se ejecuta porque la CONDICION1 es false y la CONDICION2 es true</p>
<?php else: ?>
    <p>Se ejecuta porque la CONDICION1 y CONDICION2 es false</p>
<?php endif; ?>

</body>
</html>
```

#### Condicional ternario
- En php
```php
<?php
const CONDICION1 = true;

echo CONDICION1 ? 
	"Se ejecuta porque la CONDICION1 es true <br>" 
	: 
	"Se ejecuta porque la CONDICION1 es false <br>";
?>
```

[![PHP](https://img.shields.io/badge/Condicional_if_else-447ac0?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Condicional_if_else.md)
