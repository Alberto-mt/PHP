<?php
//BUTACASCONTROLLER

require_once "models/Peliculas.php";
require_once "models/Salas.php";
require_once "models/Pases.php";
require_once "models/Butacas.php";

$peliculas = new Peliculas();
$vectorPeliculas = $peliculas->getPeliculas();
$vectorTituloPelicula = $peliculas->getPeliculaPorTitulo();

$salas = new Salas();

$pases = new Pases();
$vectorPases = $pases->getPases();

// Pelicula y pase seleccionado
$pid = $_POST["selPelicula"];
$tid = $_POST["selPase"];

$butacas =new Butacas();
$vectorButacas = $butacas->getButacas($pid,$tid);

//  CONTROLAR QUE TODOS LOS CAMPOS ESTEN COMPLETOS, SI NO DEVOLVER A LA PÁGINA PRINCIPAL
if(($pid != '' && $pid != null) and ($tid != '' && $tid != null) ){

    $vectorSalas = $salas->getSaladePelicula($pid);
    $vectorPidPelicula = $peliculas->getPeliculaPorPid($pid);

    // CON EL PID OBTENGO POR UNA SUBCONSULTA EL SID(LA SALA), QUE TIENE ASIGNADA
    foreach($vectorSalas as $reg){
        $sid =$reg["sid"];
    }

    $vectorPasesPorHora = $pases->getPasePorHora($tid);
    foreach($vectorPasesPorHora as $reg){
        $PaseHora =$reg["hora"];
    }

    // Views a utlizar
    require "views/usuarios/HeaderButacasView.php";
    require "views/usuarios/AsideMainButacasView.php";
    echo '<section class="row">';
        echo '<aside class="col-3">';

        echo '<form name="index.php" method="post">';
            echo '<h3>SESIÓN ACTUAL</h3>';

            foreach($vectorPidPelicula as $reg){
                echo '<input type="hidden" name="txtPid" value="'.$reg["pid"].'">';
                echo '<input type="hidden" name="txtTitulo" value="'.$reg["Titulo"].'">';
                echo '<h3>'.$reg["Titulo"].'</h3>';
            }

            echo '<p>SALA: '.$sid.'</p>';
            echo '<input type="hidden" name="txtSala" value="'.$sid.'">';

            echo '<p>PASE: '.$PaseHora.'</p>';
            echo '<input type="hidden" name="txtTid" value="'.$tid.'">';
            echo '<input type="hidden" name="txtPase" value="'.$PaseHora.'">';

            echo '<h6>SELECCIONA UN MÁXIMO DE 6 BUTACAS</h6>';

            echo '<div id="carrito"></div>';

            echo 'Número de entradas: ';
            echo '<span id="total">0</span>';
            echo '<input type="hidden" id= "txtTotal" name="txtTotal" value="">';

            echo '<div class="formBotonesMargin">';
                echo '<input type="submit" name="btnSubAPagos" value="ACEPTAR" class="btn btn-outline-primary">';
                echo '<a href="#" onclick="cancelarSeleccion()" class="btn btn-outline-secondary">CANCELAR</a>';
            echo '</div>';
        echo '</form>';
    echo '</aside>';

    echo '<main class="col-9">';

    echo '<div>';
        echo '<h5>Seleciona hasta un máximo de 6 butacas</h5>';
        echo '<h5>Elimina las butacas en orden inverso al seleccionado o pulsa cancelar</h5>';
    echo '</div>';
    echo '<br>';

        echo '<table>';

            echo '<tr>';
                echo '<td colspan="6" bgcolor="#8b0000" width="50px" height="50px"></td>';
                echo '<td colspan="16" bgcolor="black" width="50px" height="50px"></td>';
                echo '<td colspan="5" bgcolor="#8b0000" width="50px" height="50px"></td>';
            echo '</tr>';
            echo '<tr>';
                echo '<td colspan="8"  bgcolor="#daa520" width="50px" height="50px"></td>';
                echo '<td colspan="11" bgcolor="#daa520" width="50px" height="50px"></td>';
                echo '<td colspan="8"  bgcolor="#daa520" width="50px" height="50px"></td>';
            echo '</tr>';
            // Contador de columnas del vector
            $contCol = 1;
            echo '<tr>';
                echo '<th>1</th>';
                    foreach($vectorButacas as $reg){
                        $fila  = $reg["fila"];
                        $letra =$reg["letra"];
                        $estado = $reg["estado"];
                        $butacas = $reg["butacas"];
                        $marcaFila = $fila + 1;

                        // Hacer filas al llegar al ultimo de cada fila
                        if($contCol % 26 == 0 and $marcaFila < 11){
                            echo '<td><a href="#" title="Fila: '.$fila.'  Letra: '.$letra.'" class="'.$estado.'" id="'.$butacas.'" onclick="seleccion(this.id)">';
                            echo '<img src="assets/img/butaca.png">';
                            echo '</a></td>';
                            echo '</tr>';
                            echo '<tr>';
                            echo '<th>'.$marcaFila.'</th>';
                        }

                        // Hacer pasillos
                        elseif ($letra == 'PP'){
                            echo '<td bgcolor="#daa520"></td>';
                        }

                        // Columna normal
                        else{
                            echo '<td><a href="#" title="Fila: '.$fila.'  Letra: '.$letra.'" class="'.$estado.'" id="'.$butacas.'" onclick="seleccion(this.id)">';
                            echo '<img src="assets/img/butaca.png">';
                            // echo $fila.$letra;
                            echo '</a></td>';
                        }
                        $contCol++;
                    }
            echo '</tr>';
        echo '</table>';


    echo '</main>';
    echo '</section>';
    //  *************************************************************************************************
    echo '<br><br><br>';

}
else{
    // SE HA DEJADO UN CAMPO SIN SELCCIONAR Y LO DEVUELVE AL INDEX
    header("location:index.php");
}
?>

