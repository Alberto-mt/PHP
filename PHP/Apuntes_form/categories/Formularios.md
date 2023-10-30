## PHP - Formularios
[![Php](https://img.shields.io/badge/Php_formularios-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/index.md)

### Formularios
[![PHP](https://img.shields.io/badge/Formularios-447ac0?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/categories/Formularios.md)

#### Ejemplo de formulario
```html
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
	<form action="" name="formulario" method="">
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


[![PHP](https://img.shields.io/badge/Formularios-447ac0?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/categories/Formularios.md)
