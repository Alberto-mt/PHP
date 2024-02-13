<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <!--         HEADER-->
        <header id="header" class="row">
            <div id="logo">
                <img class="logo-header" src="assets/img/logo.png" alt="logo" />
                <a class="titulo-header align-middle" href="index.php">
                    The Bear Barrel
                </a>
            </div>
        </header>
        <!--         NAV-->
        <nav id="menu" class="row">

        </nav>
        <nav id="menu" class="row navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Home</a>
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
                      <li><a class="dropdown-item" href="#">Cerveza</a></li>
                      <li><a class="dropdown-item" href="#">Ginebra</a></li>
                      <li><a class="dropdown-item" href="#">Licor</a></li>
                      <li><a class="dropdown-item" href="#">Ron</a></li>
                      <li><a class="dropdown-item" href="#">Refrescos</a></li>
                      <li><a class="dropdown-item" href="#">Vino</a></li>
                      <li><a class="dropdown-item" href="#">Vodka</a></li>
                      <li><a class="dropdown-item" href="#">Whisky</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <a class="navbar-brand" href="#">Acerca de</a>
              <a class="navbar-brand" href="#">Contacto</a>
            </div>
          </nav>
        <div id="content" class="row">
            <!--         ASIDE-->
            <aside id="lateral" class="col-3">
                <div id="login" class="block_aside">
                    <h3>Entrar a la web</h3>
                    <form action="#" method="post">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">Nunca compartas tu correo electrónico</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" value="Enviar" class="btn btn-outline-dark">Enviar</button>
                      </form>
                    <ul>
                        <li><a href="#">Mis pedidos</a></li>
                        <li><a href="#">Gestionar pedidos</a></li>
                        <li><a href="#">Gestionar categorias</a></li>
                    </ul>
                </div>
            </aside>
            <!--         MAIN-->
            <main id="central" class="col-9">
                <section class="row">
                    <h1 class="col-12 text-center mb-3">Productos destacados</h1>
                </section>
                <section class="row cards destacados">
                    <div class="card col-4">
                        <img src="uploads/whisky/jackDaniels.jpg" />
                        <h4>Jack Daniels</h4>
                        <p>19.95 euros</p>
                        <a href="#" class="btn btn-outline-dark">Comprar</a>
                    </div>
    
                    <div class="card col-4">
                        <img src="uploads/ginebra/Bombay.jpg" />
                        <h4>Bombay Sapphire</h4>
                        <p>22.95 euros</p>
                        <a href="" class="btn btn-outline-dark">Comprar</a>
                    </div>
    
                    <div class="card col-4">
                        <img src="uploads/vodka/absolut.jpg" />
                        <h4>Absolut</h4>
                        <p>17.95 euros</p>
                        <a href="" class="btn btn-outline-dark">Comprar</a>
                    </div>
                </section>
                <section class="row"></section>            
            </main>
        </div>
        <!--        Footer-->
        <footer id="footer" class="row mt-3">
            <h4 class="col-12 text-center mt-3"> &copy;Alberto Montealegre <?= date('M').' / '.date('Y') ?></h4>
        </footer>
    </div>
</body>
</html>