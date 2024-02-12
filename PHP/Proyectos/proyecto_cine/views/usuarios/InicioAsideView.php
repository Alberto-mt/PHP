<!--INICIOASIDEVIEW-->
<section class="row">
    <!--ASIDE-->
    <aside class="col-3">
        <table>
        <?php
    //            var_dump($vectorInfo);
        foreach($vectorInfo as $reg){
            echo "<form action='index.php' method='POST'>"
                ."<tr>
                    <td width='100px' class='align-top'><img src='assets/img/direccion.png' alt='direccion'></td>
                    <td class='align-top'>".$reg["Direccion_1"]."</br><p>"
                .$reg["Direccion_2"]."</br>"
                .$reg["Direccion_3"]."</br></td>
                </tr>
                <tr>
                    <td><img src='assets/img/gmail.png' alt='gmail'></td>
                    <td>".$reg["email"]."</td>
                </tr>
                <tr>
                    <td><img src='assets/img/telefono.png' alt='telefono'></td>
                    <td>".$reg["TelContacto"]."</td>
                </tr>
                <tr>
                    <td><img src='assets/img/telefono.png' alt='telefono'></td>
                    <td>".$reg["TelTaquilla"]."</td>
                </tr>
                <tr>
                    <td><img src='assets/img/sonido.png' alt='sonido'></td>
                    <td>".$reg["Sonido"]."</td>
                </tr>
                <tr>
                    <td><img src='assets/img/parking.png' alt='parking'></td>
                    <td>".$reg["Parking_1"]."</br>"
                .$reg["Parking_2"]."</td>
                </tr>
                <tr>
                    <td><img src='assets/img/minusvalidos.png' alt='minusvalidos'></td>
                    <td>".$reg["AccesoMinusvalido"]."</td>
                </tr>
                
                <tr>
                    <td><img src='assets/img/ticket.png' alt='minusvalidos'></td>
                    <td>".$reg["PrecioEntrada"]." € / por persona</td>
                </tr>

                <tr>
                    <td colspan='2'><p class='info'>".$reg["info"]."</p></td>
                </tr>";
        }
        ?>
        </table>
    </aside>