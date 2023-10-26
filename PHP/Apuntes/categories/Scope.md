## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Scope (ambito)
[![PHP](https://img.shields.io/badge/Scope-c044b8?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Scope.md)

#### Scope y tipos de scope
Visibilidad y accesibilidad de las variables y funciones en diferentes partes de un programa
- Global: Las variables globales son aquellas que se definen fuera de cualquier función o clase y están disponibles en todo el programa. Para acceder a una variable global dentro de una función, se debe utilizar la palabra clave global seguida del nombre de la variable.
- Local: Las variables locales son aquellas que se definen dentro de una función y solo están disponibles dentro de esa función.
- Estático: Las variables estáticas son aquellas que se mantienen en memoria incluso después de que la función haya terminado su ejecución. Estas variables conservan su valor entre llamadas a la función. Para declarar una variable estática, se utiliza la palabra clave static.

#### Ejemplo de scope global
- global $variable
```php
<?php
$num = 7;

function mostrarNumero(){
	$num = 10;
	global $num;
	return $num;
}

echo mostrarNumero();
?>
```
- $GLOBALS['variable']
```php
<?php
$num = 7;

function mostrarNumero(){
	$num = 10;
	return $GLOBALS['num'];
}

echo mostrarNumero();
?>
```

#### Ejemplo de scope local
```php
<?php
$num = 7;

function mostrarNumero(){
	$num = 10;
	return $num;
}

echo mostrarNumero();
?>
```

#### Ejemplo de scope estático
```php
<?php
function mostrarNumero(){
	static $num = 0;
	$num++;
	echo "{$num} <br>";
}

mostrarNumero();
mostrarNumero();
mostrarNumero();
mostrarNumero();
?>
```

[![PHP](https://img.shields.io/badge/Scope-c044b8?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Scope.md)
