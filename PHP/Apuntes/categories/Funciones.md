## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Funciones
[![PHP](https://img.shields.io/badge/Funciones-c044b8?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funciones.md)

#### Ejemplo de funcion sin argumentos
```php
<?php 
function saludo(){
	echo 'Hola mundo!!';
}

echo saludo() . '<br />';
?>
```

#### Ejemplo de funciones con argumentos
```php
<?php 
function saludoNombre($nombre){
	return 'Hola ' . $nombre;
}

echo saludoNombre('Pepe') . '<br />';
echo saludoNombre('Luis') . '<br />';

function suma($num1, $num2){
 	$resultado = $num1 + $num2;
	return $resultado;
}

echo '<br />' . suma(2, 3);
?>
```

[![PHP](https://img.shields.io/badge/Funciones-c044b8?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Funciones.md)
