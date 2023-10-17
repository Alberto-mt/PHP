## PHP
[![PHP](https://img.shields.io/badge/PHP-787CB5?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/index.md)

### Break y continue
[![PHP](https://img.shields.io/badge/Break_y_continue-c044b8?style=for-the-badge&logo=php&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Break_y_continue.md)

#### Break vs Continue
- Break: Se utiliza para salir de un bucle, finaliza la ejecución del bucle y continúa con la ejecución del código que siguedespués del bucle.
- Continue: Se utiliza para saltar a la siguiente iteración de un bucle sin ejecutar el resto del código dentro del bucle para esa iteración.

#### Ejemplo de break
```php
<?php 
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

echo '<h1>Break</h1>';
echo '<ol>';

foreach($meses as $mes){	
	if ($mes === 'Mayo'){
		echo '<li>##### Mes es igual a Mayo #####</li>';
		break;
	}
	echo '<li>' . $mes . '</li>';
}

echo '</ol>';
?>
```

#### Ejemplo de continue
```php
<?php 
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

echo '<h1>Continue</h1>';
echo '<ol>';

foreach($meses as $mes){	
	if ($mes === 'Mayo'){
		echo '<li>##### Mes es igual a Mayo #####</li>';
		continue;
	}
	echo '<li>' . $mes . '</li>';
}

echo '</ol>';
?>
```

[![PHP](https://img.shields.io/badge/Break_y_continue-c044b8?style=for-the-badge&label=&#9650;&logoColor=white&labelColor=101010)](https://github.com/Alberto-mt/PHP/blob/main/PHP/Apuntes/categories/Break_y_continue.md)
