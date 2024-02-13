<section class="row">
    <div class="col-1"></div>
    <div class="col-11">
        <h1 class="mb-5 text-center">Conocenos un poco más</h1>

        <section class="mt-5 mb-5">
            <h3 class="text-center mb-3">Donde encontrarnos</h3>
            <div class="row">
                <div class="col-6">
                    <?php $inAll = Utils::showInfo();?>
                    <?php foreach($inAll as $reg):?>
                        <div class="row">
                            <div class="col-2">
                                <img src='<?=BASE_URL?>assets/img/direccion.png' alt='direccion'>
                            </div>
                            <div class="col-9">
                                <h6 class="mt-2 "><?=$reg["direccion"]?> - <?=$reg["localidad"]?> (<?= Utils::showMadrid($reg["provincia"]) ?>) </h6>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <img src='<?=BASE_URL?>assets/img/telefono.png' alt='telefono'>
                            </div>
                            <div class="col-9 ">
                                <h6 class="mt-2"><?=$reg["telefono"]?></h6>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <img src='<?=BASE_URL?>assets/img/gmail.png' alt='gmail'>
                            </div>
                            <div class="col-9 ">
                                <h6 class="mt-2"><?=$reg["email"]?></h6>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <img src='<?=BASE_URL?>assets/img/parking.png' alt='gmail'>
                            </div>
                            <div class="col-9 ">
                                <h6 class="mt-2"><?=$reg["parking"]?> >> <?=$reg["parking_disponible"]?></h6>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2">
                                <img src='<?=BASE_URL?>assets/img/minusvalidos.png' alt='gmail'>
                            </div>
                            <div class="col-9 ">
                                <h6 class="mt-2"><?=$reg["acceso_minusvalidos"]?></h6>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
                <div class="col-6 ">
                    <div class=" d-flex justify-content-center">
                        <iframe class="mt-5"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d760.184467446141!2d-3.849249211863589!3d40
                .348160598704446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd418f3d5acae7fd%3A0x22df4a0662d81cd6!2sFactori%20Discount%20Alcorc%C3%B3n!5e0!3m2!1ses!2ses!4v1614779283055!5m2!1ses!2ses"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5 mb-5">
            <h3 class="text-center mb-3 ">Participa en nuestras redes sociales</h3>
            <div class=" d-flex justify-content-between">
                <div>
                    <a  target="_blank" href="https://es-es.facebook.com/"><img class="social"
                                                                                src="<?=BASE_URL?>assets/img/facebook.png" alt="facebook" /></a>
                </div>
                <div>
                    <a  target="_blank" href="https://www.instagram.com/"><img class="social"
                                                                               src="<?=BASE_URL?>assets/img/instagram.png" alt="instagram" /></a>
                </div>
                <div>
                    <a target="_blank" href="https://www.messenger.com/"><img class="social"
                                                                              src="<?=BASE_URL?>assets/img/messenger.png" alt="messenger" /></a>
                </div>
                <div>
                    <a  target="_blank" href="https://web.whatsapp.com/"><img class="social"
                                                                              src="<?=BASE_URL?>assets/img/whatsapp.png" alt="whatsapp" /></a>
                </div>
            </div>
        </section>

        <section class="row mb-5">
            <div class="col-2"></div>
            <div id="carouselExampleIndicators mt-5" class="carousel slide col-8" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?=BASE_URL?>assets/img/s2.jpg" class="d-block w-100" alt="slider2">
                    </div>
                    <div class="carousel-item">
                        <img src="<?=BASE_URL?>assets/img/s3.jpg" class="d-block w-100" alt="slider3">
                    </div>
                    <div class="carousel-item">
                        <img src="<?=BASE_URL?>assets/img/s1.jpg" class="d-block w-100" alt="slider1">
                    </div>
                </div>

            </div>
            <p class="mt-3">NUESTRO EQUIPO.- Estamos especializados en toda clase de vinos y licores nacionales y de importación.
                Disponemos de nuestro propio almacen donde el cliente puede comprar y recoger sus compras.
                Además, nuestro cualificado personal le ayudará y asesorará en sus compras.</p>
        </section>
    </div>
</section>
