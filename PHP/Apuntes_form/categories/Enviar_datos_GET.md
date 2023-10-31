## PHP - Formularios
[![Php](https://img.shields.io/badge/Php_formularios-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/index.md)

### Enviar datos por método GET
[![PHP](https://img.shields.io/badge/Enviar_datos_GET-c08a44?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/categories/Enviar_datos_GET.md)

#### Método GET
El método GET se utiliza para recuperar datos del servidor. Cuando se envía un formulario utilizando el método GET, los datos del formulario se agregan a la URL como parámetros de consulta. Este método se usa comúnmente para recuperar datos o realizar operaciones de lectura.

#### Ejemplo de enviar datos por método GET
```php
<?php 

// Obteniendo datos mediante el metodo GET

if ($_GET) {
	echo "Método GET<br><br>";
	print_r($_GET);
	$nombre = $_GET['nombre'] ?? "";
	$edad = $_GET['edad'] ?? 0;
	$sexo = $_GET['sexo']  ?? null;
	$inicio = $_GET['inicio'] ?? 2023;
	$terminos = $_GET['terminos'] ?? null;

	echo "<br/><br/>----------------------------------------------<br/>";
	echo "Nombre: {$nombre} <br/>";
	echo "Edad: {$edad} <br/>";
	echo "Sexo: {$sexo} <br/>";
	echo "Inicio curso: {$inicio} <br/>";
	echo "Aceptación terminos: {$terminos} <br/>";

	die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<form action="" name="formulario" method="get">
		<!-- Input text -->
		<label for="nombre">Nombre</label>
		<br>
		<input type="text" placeholder="Nombre:" name="nombre" id="nombre">
		<br><br>

		<!-- Input number -->
		<label for="edad">Edad</label>
		<br>
		<input type="number" placeholder="Edad:" name="edad" id="edad">
		<br><br>

		<!-- Radio button -->
		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" id="hombre" value="Hombre">
		<br>

		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" id="mujer" value="Mujer">
		<br><br>

		<!-- Combobox -->
		<label for="inicio">Año de inicio</label>
		<br>
		<select name="year" id="inicio">
			<option value="2023">2023</option>
			<option value="2024">2024</option>
		</select>
		<br><br>

		<!-- Checkbox -->
		<label for="terminos">Aceptar terminos</label>
		<input type="checkbox" name="terminos" value="ok" id="terminos">
		<br><br>

		<input type="submit" name="btn-enviar" value="Enviar">
	</form>
</body>
</html>
```

[![PHP](https://img.shields.io/badge/Enviar_datos_GET-c08a44?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/categories/Enviar_datos_GET.md)
