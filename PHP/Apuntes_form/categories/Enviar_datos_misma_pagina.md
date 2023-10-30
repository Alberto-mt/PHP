## PHP - Formularios
[![Php](https://img.shields.io/badge/Php_formularios-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/index.md)

### Enviar datos a misma página
[![PHP](https://img.shields.io/badge/Enviar_datos_misma_pagina-c044b8?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/categories/Enviar_datos_misma_pagina.md)

#### Tipos de "action"
| Tipo  | Descripción  |
|---|---|
| **\"\"**  |  Desaconsejado (solo para pruebas) |
| **\<\?php echo htmlspecialchars($_SERVER['PHP_SELF']); \?\>**  | Forma aconsejada  |
| **misma_pagina.php**  | Rellenando con el nombre de la misma página donde está el formulario  |

#### Método de envío
POST

#### Ejemplo de envío de datos a misma página
```html
<?php

if ($_POST) {
	echo "post<br><br>";
	print_r($_POST);
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
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="formulario" method="post">
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

[![PHP](https://img.shields.io/badge/Enviar_datos_misma_pagina-c044b8?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/categories/Enviar_datos_misma_pagina.md)
