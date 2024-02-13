<?php
/**
 * Constantes de conexión a base de datos
 * - HOST: alojamiento
 * - USERNAME: nombre de usuario
 * - PASSWD: contraseña
 * - DBNAME: nombre de la base de datos
 * - CHARSET: utf8
 */
define('HOST','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DB_NAME','bd_tienda_online');
define("CHARSET","utf8");
/**
 * Constantes de configuración
 *  - BASE_URL              - lugar donde tengo alojado el proyecto
 *  - BASE_URL_SCRIPT       - lugar donde tengo alojado el proyecto en script
 *  - CONTROLLER_DEFAULT    - controlador por defecto
 *  - ACTION_DEFAULT        - acción por defecto
 */
define("BASE_URL", "http://localhost/php/tienda-online/");
define("BASE_URL_SCRIPT", '<script type="text/javascript">window.location ="'.BASE_URL.'";</script>');
define("CONTROLLER_DEFAULT", "ProductoController");
define("ACTION_DEFAULT", "index");
/**
 * Gastos de envío
 */
define("ENVIO", 6);