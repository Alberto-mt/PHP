## PHP - Formularios
[![Php](https://img.shields.io/badge/Php_formularios-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/index.md)

### Enviar datos por método POST
[![PHP](https://img.shields.io/badge/Enviar_datos_POST-44c04c?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/categories/Enviar_datos_POST.md)

#### Método POST
El método POST se utiliza para enviar datos al servidor en el cuerpo de la solicitud HTTP. Este método se utiliza comúnmente para enviar formularios que contienen grandes cantidades de datos confidenciales.

#### Ejemplo de enviar datos por método POST
```php
<?php 

// Obteniendo datos mediante el metodo POST

if ($_POST) {
	echo "Método POST<br><br>";
	print_r($_POST);
	$nombre = $_POST['nombre'] ?? "";
	$edad = $_POST['edad'] ?? 0;
	$sexo = $_POST['sexo']  ?? null;
	$inicio = $_POST['inicio'] ?? 2023;
	$terminos = $_POST['terminos'] ?? null;

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
	<form action="" name="formulario" method="post">
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

[![PHP](https://img.shields.io/badge/Enviar_datos_POST-44c04c?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/categories/Enviar_datos_POST.md)
