## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Include y require
[![PHP](https://img.shields.io/badge/Include_y_require-c08a44?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Include_y_require.md)

#### Include
La función include incluye y evalúa el archivo especificado. Si el archivo no se encuentra, se emite una advertencia (warning) y el script continúa ejecutándose.

Si se especifica una ruta absoluta o relativa al archivo, el include_path se ignorará por completo.

Con include_once, el archivo solo se incluirá una vez, evitando la inclusión duplicada.

```php
<?php
// Include
include("ruta_del_archivo.php");
include "ruta_del_archivo.php";

// Include_once
include_once("ruta_del_archivo.php");
include_once "ruta_del_archivo.php";
?>
```

#### Require
La función require incluye y evalúa el archivo especificado, pero si el archivo no se encuentra, se produce un error fatal y el script se detiene.

Con require_once, el archivo solo se incluirá una vez, evitando la inclusión duplicada.

```php
<?php
// Require
require("ruta_del_archivo.php");
require "ruta_del_archivo.php";

// Require_once
require_once("ruta_del_archivo.php");
require_once "ruta_del_archivo.php";
?>
```

#### Ejemplo con include
- index.php
```php
<?php 
function saludo(){
	return "Hola Mundo!!";
}

include 'vista.php';
?>
```  
- view.html
```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?php echo saludo(); ?></h1>
</body>
</html>
```

#### Ejemplo con require
- index.php
```php
<?php 
function saludo(){
	return "Hola Mundo!!";
}

require 'vista.php';
?>
```  
- view.html
```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1><?php echo saludo(); ?></h1>
</body>
</html>
```  

[![PHP](https://img.shields.io/badge/Include_y_require-c08a44?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Include_y_require.md)
