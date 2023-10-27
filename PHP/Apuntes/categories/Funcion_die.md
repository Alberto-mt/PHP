## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Función die
[![PHP](https://img.shields.io/badge/Funcion_die-44c04c?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funcion_die.md)

#### die()
La función die() en PHP se utiliza para terminar la ejecución de un programa y mostrar un mensaje de error.
```php
<?php
$error_message = "Se produjo un error en el programa.";
die($error_message);
?>
```
Cuando se utiliza PHP en la línea de comandos, die() simplemente imprime el mensaje de error en la salida estándar (STDOUT) y termina el programa con un código de salida normal de 0.
Para las convenciones de UNIX para programas de línea de comandos:
```php
<?php
fwrite(STDERR, "Se produjo un error.\n");
exit(1);
?>

```

#### Ejemplo de die()
```html
<?php 
echo "Contenido 1<br>";

// Sin mostrar mensaje
// die();

// Mostrando mensaje
$error_message = "Se produjo un error en el programa.";
die($error_message);

echo "Contenido 2<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php die($error_message); ?>
	<h1>Hola Mundo</h1>
</body>
</html>
```

[![PHP](https://img.shields.io/badge/Funcion_die-44c04c?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funcion_die.md)
