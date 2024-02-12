<!--INICIOMAINVIEW-->
<!--MAIN-->
    <main class="col-9">
        <form action="index.php" method="get">
            <table class="table table-hover">
                <?php
                foreach($vectorPeliculas as $reg){
                    echo '<tr class="row">';
                        echo '<td class="d-flex justify-content-center col-3 ">';
                            echo '<a href="index.php?pid='.$reg['pid'].'">';
                                echo '<img src="uploads/'.$reg["Link_Imagen"].'" alt="" width="200px">';
                            echo '</a>';
                        echo '</td>';

                        echo '<td class="d-flex justify-content-center d-flex align-content-center flex-wrap col-3">';
                            echo '<h2><a href="index.php?pid='.$reg['pid'].'" class="link-primary d-grid">';
                                echo $reg['Titulo'];
                            echo '</a></h2>';
                        echo '</td>';

                        echo '<td class="d-flex justify-content-center d-flex align-content-center flex-wrap col-3">';
                        echo '<p>Genéro: '.$reg['Genero'].'<br>'
                              .'Clasificación: '.$reg['Clasificacion'].'<br>';
                        echo 'Nacionalidad: '.$reg['Nacionalidad'].'</p>';
                        echo '</td>';
                        echo '<td class="d-flex justify-content-center col-3">';
                            echo '<a href="index.php?pid='.$reg['pid'].'">';
                                echo '<img src="uploads/'.$reg["Link_Imagen"].'" alt="" width="200px"';
                            echo '</a>';
                        echo '</td>';

                    echo '</tr>';
                }
                ?>
            </table>
        </form>
    </main>

    </section>


