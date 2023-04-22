<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])     <!-- para los archivos y recursos -->
    @stack('styles')
  <link rel="stylesheet" href="{{asset('assets/css/mdb.min.css') }}">
  <script src="{{asset('assets/js/mdb.min.js') }}"></script>
 

  <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>

</head>

<body>
<header >
  <!-- Navbar   -->
  <nav class="navbar navbar-expand-lg  " style="background-color: rgb(36,41,47)">
    <div class="container-fluid ">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
            <a class="nav-link text-white fs-5 fw-bold " aria-current="page" href="#"><i class="fab fa-gitlab fa-2x"></i></a>
          </li>
        <li class="nav-item active">
            <a class="nav-link text-white fs-5 fw-bold " aria-current="page" href="#">       </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white fs-5 fw-bold " aria-current="page" href="login">Inicio</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white fs-5  " aria-current="page" href="muro">Muro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fs-5" href="/muro">Juegos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fs-5" href="#">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fs-5" href="#">Nosotros</a>
          </li>
          
        </ul>
      </div>


      @auth
        <div class="d-flex align-items-center">
          <p class="me-5 px-3 me-2">
            <!--  {{ auth()->user()->username }} mostrara el nombre de usuario en la vista seleccionada   -->
            <div class="px-3"><h3 class="text-white-50"> {{ auth()->user()->username }}</h3></div>
          </p>
          <form action="{{ route('logout') }}" method="post">
            @csrf
          <button type="submit" class="btn btn-light px-3 me-3" >
            Cerrar sesion
          </button>
         </form>
        </div>
        @endauth
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://assets.nintendo.com/image/upload/c_fill,w_1200/q_auto:best/f_auto/dpr_2.0/ncom/es_LA/games/switch/d/devil-may-cry-3-special-edition-switch/hero');
      height: 600px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white ">
        
                   
                
          <h1 class="mb-3">Kyoops Games </h1>
          <h4 class="mb-3">...</h4>
          <a class="btn btn-outline btn-lg text-white" style="background-color: #bf0a0a" href="/login" role="button"
          >Unirse a la comunidad</a
          >
        </div>
      </div>
    </div>
  </div>
</header>

  <!-- Background image -->

<div class="container">
    <h1>@yield('titulo')</h1>
    <hr class="hr">
    @yield('contenido')
</div>

<!-- login -->

<div class="container">
    <h1>@yield('titulo')</h1>
    <hr class="hr">
    @yield('login')
</div>


<!-- registro -->

<div class="container">
    <h1>@yield('titulo')</h1>
    <hr class="hr">
    @yield('registro')
</div>

<!-- muro -->

<div class="container">
    <h1>@yield('titulo')</h1>
    <hr class="hr">
    @yield('muro')
</div>

<!-- imagen -->




<!-- footer -->
<footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 text-white" style="background-color: rgba(36, 41, 47);">
    © 2023 Copyright:
    <a class="text-white" href="https://www.instagram.com/">Kyoops RG</a>
    
    <section class="mb-4"><br>
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="https://www.facebook.com/"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
  </div>
  <!-- Copyright -->

<!-- nota: 
@auth
se pondra en la parte ejem:botones que estaran autenticados

@endauth
//////////////////////////////////////////////////////////////////////

@guest

contenido ira dentro de lo que no estan autenticados

@endguest

-->




</footer>


    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
</body>
</html>