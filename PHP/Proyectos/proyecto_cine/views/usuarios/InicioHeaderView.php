<!--INICIOHEADERVIEW-->
</div>
<div id="form_elegir" class="col-8">
    <form action="index.php" method="post" border="1">
        <legend>SELECCIONA PELICULA Y SESIÓN PARA HOY</legend>
        <table>
            <tr>
                <td>
                    <select name="selPelicula" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option label=" -- PELICULA -- "></option>
                        <?php
                        foreach($vectorTituloPelicula as $reg){
                            echo '<option value="'.$reg["pid"].'">'.$reg["Titulo"].'</option>';
                        }
                        ?>
                    </select>
                </td>
                <td>

                </td>
                <td>
                    <select name="selPase" id="" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option label=" -- SESIÓN -- "></option>
                        <?php
                        foreach($vectorPases as $reg){
                            echo '<option value="'.$reg["tid"].'">'.$reg["hora"].'</option>';
                        }
                        ?>
                    </select>
                </td>
                <td>

                </td>
                <td colspan="3">
                    <input type="submit" name="btnSeleccion" value="SELECCIONAR BUTACAS" class="btn btn-outline-primary">
                </td>
            </tr>
        </table>
    </form>
</div>
</header>