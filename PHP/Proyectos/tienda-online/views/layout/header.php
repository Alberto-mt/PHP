<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="<?=BASE_URL?>assets/img/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <!--         HEADER-->
    <header id="header" class="row">
        <div id="logo">
<!--            <img class="logo-header" src="assets/img/logo.png" alt="logo" />-->
            <a href="<?=BASE_URL?>"><img class="logo-header" src="<?=BASE_URL?>assets/img/logo.png" alt="logo" /></a>
            <a class="titulo-header align-middle" href="<?=BASE_URL?>">
                The Bear Barrel
            </a>
        </div>
    </header>
    <!--         NAV-->
    <nav id="menu" class="row">

    </nav>
    <nav id="menu" class="row navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=BASE_URL?>">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorias
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <?php $categoriasAll = Utils::showCategorias();?>
                            <?php foreach($categoriasAll as $reg):?>
                                <li><a class="dropdown-item" href="<?=BASE_URL?>categoria/ver&id=<?=$reg["id"]?>">
                                        <?=$reg["nombre"]?></a></li>
                            <?php endforeach;?>
<!--                            <li><a class="dropdown-item" href="#">Cerveza</a></li>-->
<!--                            <li><a class="dropdown-item" href="#">Ginebra</a></li>-->
<!--                            <li><a class="dropdown-item" href="#">Licor</a></li>-->
<!--                            <li><a class="dropdown-item" href="#">Ron</a></li>-->
<!--                            <li><a class="dropdown-item" href="#">Refrescos</a></li>-->
<!--                            <li><a class="dropdown-item" href="#">Vino</a></li>-->
<!--                            <li><a class="dropdown-item" href="#">Vodka</a></li>-->
<!--                            <li><a class="dropdown-item" href="#">Whisky</a></li>-->
                        </ul>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="<?=BASE_URL?>menu/acerca_de">Acerca de</a>
            <a class="navbar-brand" href="<?=BASE_URL?>menu/contacto">Contacto</a>
        </div>
    </nav>
    <div id="content" class="row">