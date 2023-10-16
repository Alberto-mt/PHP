## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Recorrer array - foreach
[![PHP](https://img.shields.io/badge/Recorrer_array_Foreach-c08a44?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Recorrer_array_foreach.md)

#### Bucle Foreach
El bucle foreach se utiliza para iterar sobre arrays u objetos. Permite recorrer cada par clave/valor en un array o cada par propiedad/valor en un objeto.

#### Ejemplo de foreach en php
```php
<?php 
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

echo '<h1>Recorrer array con Foreach</h1>';
echo '<ol>';

// Recorrer array con foreach
foreach($meses as $mes){
	echo '<li>' . $mes . '</li>';
}

echo '</ol>';
?>
```

#### Ejemplo de foreach dentro de html
```html
<?php 
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forech</title>
</head>
<body>
	<h1>Recorrer array con Foreach</h1>
	<ol>
		<!-- Recorrer array con foreach -->
		<?php foreach($meses as $mes): ?>
    			<li><?= $mes; ?></li>
		<?php endforeach; ?>	
	</ol>
</body>
</html>
```

#### Ejemplo de foreach con array asociativo en php 
```php
<?php 
$alumno = array('nombre' => 'Pepe', 'apellido' => 'Martinez', 'clase' => 'DAW');

// Recorrer array con foreach
foreach($alumno as $dato => $valor){
	echo '<li>' . $dato . ' : ' . $valor . '</li>';
}
?>
```

#### Ejemplo de foreach con array asociativo dentro de html
```html
<?php 
$alumno = array('nombre' => 'Pepe', 'apellido' => 'Martinez', 'clase' => 'DAW');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forech asociativo</title>
</head>
<body>
	<h1>Recorrer array asociativo con Foreach</h1>
	<ol>
		<!-- Recorrer array con foreach -->
		<?php foreach($alumno as $dato => $valor): ?>
    			<li><?= $dato . ' : ' . $valor ?></li>
		<?php endforeach; ?>	
	</ol>
</body>
</html>
```

[![PHP](https://img.shields.io/badge/Recorrer_array_Foreach-c08a44?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Recorrer_array_foreach.md)
