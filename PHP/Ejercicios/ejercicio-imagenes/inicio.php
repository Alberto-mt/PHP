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
    <h1>PULSA EN UNA IMAGEN PARA VER TODOS LOS DATOS</h1>
    <div class="content">
        <a href="insertar.php">Insertar nuevo empleado</a>
        <form action="datos.php" method="get">
            <table>
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDOS</th>
                    <th>IMAGEN</th>
                </tr>
                <?php
                $cn=mysqli_connect("localhost","root","");
                if(mysqli_connect_errno()){
                    echo 'Error al conectar con la BBDD';
                    exit();
                }
                mysqli_select_db($cn, "bd_pruebas") or die("No se encuentra la BBDD");
                mysqli_set_charset($cn,"utf8");

                $consulta="select * from empleados";
                $resultado=mysqli_query($cn,$consulta);
                while ($fila = $resultado->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>';
                    echo $fila['nombre'];
                    echo '</td>';
                    echo '<td>';
                    echo $fila['apellidos'];
                    echo '</td>';
                    echo '<td>';
                    echo '<a href="datos.php?id='.$fila['id'].'">';
                    echo '<img src=img/'.$fila["foto"].' alt="" width="200px">';
                    echo '</a>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </form>
    </div>
    <h4> &copy;Alberto Montealegre <?= date('M').' / '.date('Y') ?></h4>
</body>
</html>


