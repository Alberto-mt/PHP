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
<h1>DATOS DE EMPLEADO</h1>
<div class="content">
    <table>
        <?php
        $id = $_GET["id"];
        $cn=mysqli_connect("localhost","root","");
        if(mysqli_connect_errno()){
            echo 'Error al conectar con la BBDD';
            exit();
        }
        mysqli_select_db($cn, "bd_pruebas") or die("No se encuentra la BBDD");
        mysqli_set_charset($cn,"utf8");

        $consulta="select * from empleados where id =".$id;
        $resultado=mysqli_query($cn,$consulta);
        while ($fila = $resultado->fetch_assoc()) {
            echo '<tr>';
                echo '<td>';
                echo '<img src=img/'.$fila["foto"].' alt="" width="200px">';
                echo '</td>';
                echo '<td>';
                echo '</br>Nombre: '. $fila['nombre'] .'</br></br>';
                echo 'Apellidos: '. $fila['apellidos'] .'</br></br>';
                echo 'Dirección: '. $fila['direccion'] .'</br></br>';
                echo 'Telf: '. $fila['telefono'] .'</br></br>';
                echo 'Departamento: '. $fila['departamento'] .'</br></br>';
                echo 'Email: '. $fila['email'] .'</br></br>';
                echo 'Edad: '. $fila['edad'] .'</br></br>';
                echo '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <a href="inicio.php"><< INICIO</a>
</div>
<h4> &copy;Alberto Montealegre <?= date('M').' / '.date('Y') ?></h4>
</body>
</html>