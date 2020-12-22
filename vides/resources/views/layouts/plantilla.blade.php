<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
    
    <!-- Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/proyecto5Ciclo/blog/resources/views/css/style.css">

    
</head>
<body>
<!-- header -->
<header class="header">
    <!--Nav General-->
<div class= "contenedor">
  <nav class="navbar | navbar-expand-lg | dimensionPar  position-fixed w-100">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img class="logo" src="/proyecto5Ciclo/blog/resources/views/img/logo2.jpeg" alt="videLogo">  
            Vides
        </a>
        <div class="collapse navbar-collapse dimensionPar menu " id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link active"href="#">Inicio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="#">Hoteles</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="#">Zonas turisticas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active"href="#">Login</a>
              </li>
              <li class="nav-item">
              <a class="nav-link active" href="#">Help</a>
              </li>
        </ul>
        </div>
    </div>
    </nav>
  </div>
</header> 
    
    @yield('content')
    <!-- footer -->
<footer class=" footer navbar | navbar-inverse | navbar-fixed-bottom | navbar-expand-lg">
  <div class="card-group col-12">
    <div class="card col-3 ">
      <div class="card-body">
        <h5 class="card-title">Contactos</h5>
        <img src="/proyecto5Ciclo/blog/resources/views/img/email-solid.svg" class="contacImagen" alt=""> email: example@gmail.com<br>
        <img src="/proyecto5Ciclo/blog/resources/views/img/phone-solid.svg" class="contacImagen"alt=""> Cel: 07 370 1444<br>
        <img src="/proyecto5Ciclo/blog/resources/views/img/phone-solid.svg" class="contacImagen"alt=""> Tef: 1800 8875 88
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Misk'y</h5>
        <img src="/proyecto5Ciclo/blog/resources/views/img/github.svg" alt="">
        <p class="card-text">Tu ideas, nosotros lo creamos</p>
      </div>
  </div>
  <div class="card col-3 ">
    <div class="card-body">
      <h5 class="card-title">Redes Sociales</h5>
      <img src="/proyecto5Ciclo/blog/resources/views/img/facebook-brands.svg" class="imageSocialWeb" alt=""> &nbsp;&nbsp;&nbsp;&nbsp;
      <img src="/proyecto5Ciclo/blog/resources/views/img/instagram-brands.svg" class="imageSocialWeb" alt=""> &nbsp;&nbsp;&nbsp;&nbsp;
      <img src="/proyecto5Ciclo/blog/resources/views/img/github.svg" class="imageSocialWeb" alt=""> &nbsp;&nbsp;&nbsp;&nbsp;
    </div>
  </div>
    </div>
</footer>
    <!-- script -->
</body>
</html>