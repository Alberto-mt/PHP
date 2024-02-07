<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content">
    <h1>INTRODUCE TODOS LOS DATOS Y PULSA INSERTAR</h1>
    <form action="insertar.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label for="">Nombre:</label></td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td><label for="">Apellidos:</label></td>
                <td><input type="text" name="apellidos"></td>
            </tr>
            <tr>
                <td><label for="">Dirección:</label></td>
                <td><input type="text" name="direccion"></td>
            </tr>
            <tr>
                <td><label for="">Telefono:</label></td>
                <td><input type="text" name="telefono"></td>
            </tr>
            <tr>
                <td><label for="">Email:</label></td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td><label for="">Departamento:</label></td>
                <td><input type="text" name="departamento"></td>
            </tr>
            <tr>
                <td><label for="">Edad:</label></td>
                <td><input type="text" name="edad"></td>
            </tr>
            <tr>
                <td><label for="">Foto:</label></td>
                <td><input type="file" name="foto"></td>
            </tr>
        </table>
        <input type="submit" name="btnInsertar" value="INSERTAR">
    </form>
    <?php
    if(isset($_POST["btnInsertar"])){
        $nombreImg=$_FILES['foto']['name'];
//        $carpetaDestino = $_SERVER["DOCUMENT_ROOT"]. "";
        //    Coger ruta de donde tenemos la aplicación
        $carpetaDestino=$_SERVER["DOCUMENT_ROOT"]. "/DWES/53 - Empleados/img/";
        //    subir archivo: incio(carpeta temporal), destino
        move_uploaded_file($_FILES['foto']['tmp_name'], $carpetaDestino. $nombreImg);

        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $departamento = $_POST["departamento"];
        $edad = $_POST["edad"];

        $cn=mysqli_connect("localhost","root","");
        if(mysqli_connect_errno()){
            echo 'Error al conectar con la BBDD';
            exit();
        }
        mysqli_select_db($cn, "bd_pruebas") or die("No se encuentra la BBDD");
        mysqli_set_charset($cn,"utf8");
        $consulta="insert into empleados (nombre,apellidos,direccion,telefono,email,departamento,edad,foto)
                values('$nombre','$apellidos','$direccion','$telefono','$email','$departamento',$edad,'$nombreImg')";
        $resultado=mysqli_query($cn,$consulta);
        if(mysqli_affected_rows($cn)>0){
            echo "Registro insertado correctamente";
        }
        else{
            echo "No se a podido insertar";
        }
    }
    ?>
    <a href="inicio.php"><< INICIO</a>
</div>
<h4> &copy;Alberto Montealegre <?= date('M').' / '.date('Y') ?></h4>
</body>
</html>