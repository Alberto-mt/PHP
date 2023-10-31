## PHP - Formularios
[![Php](https://img.shields.io/badge/Php_formularios-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/index.md)

### Comprobar envío de un formulario
[![PHP](https://img.shields.io/badge/Comprobar_envio_de_formulario-447ac0?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/categories/Comprobar_envio_de_formulario.md)

#### Comprobar si un formulario ha sido enviado
- Comprobar si los datos han sido enviados por el método POST o por GET con $_SERVER['REQUEST_METHOD']
```php
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 	echo "Se enviaron por método POST";
} else {
 	echo "Se enviaron por método GET";
}
?>
```

- Verificar si se ha enviado un campo específico
```php
<?php
if (isset($_POST['submit'])) {
    echo "El formulario ha sido enviado";
    // Realizar las acciones necesarias
}
?>
```

- Verificar si $_POST no está vacío
```php
<?php
if (!empty($_POST)) {
    echo "El formulario ha sido enviado";
    // Realizar las acciones necesarias
}
?>
```

- Agregar un campo oculto como indicador
```html
<input type="hidden" name="enviado" value="true">
```
```php
<?php
if (isset($_POST['enviado'])) {
    echo "El formulario ha sido enviado";
    // Realizar las acciones necesarias
}
?>
``` 

[![PHP](https://img.shields.io/badge/Comprobar_envio_de_formulario-447ac0?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes_form/categories/Comprobar_envio_de_formulario.md)
