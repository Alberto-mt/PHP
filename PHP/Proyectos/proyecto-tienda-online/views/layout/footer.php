            </main>
            <!--        Footer-->
            <footer id="footer" class=" mt-3">
                <section class="row mt-5">
                    <div class="col-6">
                        <?php $inAll = Utils::showInfo();?>
                        <?php foreach($inAll as $reg):?>
                            <div class="row">
                                <div class="col-1">
                                    <img src='<?=BASE_URL?>assets/img/direccion.png' alt='direccion'>
                                </div>
                                <div class="col-10">
                                    <h6 class="mt-2 "><?=$reg["direccion"]?> - <?=$reg["localidad"]?>
                                        (<?= Utils::showMadrid($reg["provincia"]) ?>) - <?=$reg["cos_postal"]?> </h6>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-1">
                                    <img src='<?=BASE_URL?>assets/img/telefono.png' alt='telefono'>
                                </div>
                                <div class="col-10 ">
                                    <h6 class="mt-2"><?=$reg["telefono"]?></h6>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-1">
                                    <img src='<?=BASE_URL?>assets/img/gmail.png' alt='gmail'>
                                </div>
                                <div class="col-10 ">
                                    <h6 class="mt-2"><?=$reg["email"]?></h6>
                                </div>
                            </div>

                        <?php endforeach;?>
                    </div>
                    <div class="col-6 mt-4">
                        <div class="d-flex justify-content-between">
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
                    </div>
                </section>
                <h4 class="col-12 text-center mt-3"> &copy;Alberto Montealegre <?= date('M').' / '.date('Y') ?></h4>
            </footer>
        </div>

    </div>
    </body>
</html>
