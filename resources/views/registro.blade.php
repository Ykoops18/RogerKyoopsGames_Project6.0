
@extends('layout.layoutprincipal')




@section('registro') 
<div class=" d-flex " >
<div class="" style="width: 500px ">
<ul class="list-unstyled ">
  <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>Acceso ilimitado </li>
  <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>Comparte tu contenido </li>
  <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>Obten asesoria directa</li>
  <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>Obten tu repositorio gratuito</li>
  <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>Accede a el contenido más actual </li>
  <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i> Los usuarios pueden publicar sus posts</li>
  <li class="mb-1"><i class="fas fa-check-circle me-2 text-success"></i>Sistema de calificación y clasificación de contenido</li>
  
  
</ul>
</div>

<div class="w-50 d-flex justify-content-center border border-1 rounded " >
  

  <form action="/registro" method="POST" class="w-75 p-3">
    
  <div class="container d-flex justify-content-center">
    <a class="navbar-brand" href="#">
      <img
        src="{{ asset('asset/img/1.png') }}" 
        height="180"
        alt="MDB Logo"
        loading="lazy"
      />
    </a>
  </div>

    
    <br>
  @csrf
    <!-- 2 column  grid layout with text inputs for the first and last names   -->
    <div class="row mb-4">
      <div class="col">
        <div class="form-outline">
          <input type="text" id="name" name="name" class="form-control" />
          <label class="form-label" for="form3Example1"> Nombre</label>
        </div>
        @error('name')
        <p style="color: red">{{$message}}</p>
        @enderror
      </div>
      <div class="col">
        <div class="form-outline">
          <input type="text" id="username" name="username" class="form-control" />
          <label class="form-label" for="form3Example2">Nombre de usuario</label>
        </div>
        @error('username')
        <p style="color: red">{{$message}}</p>
        @enderror
      </div>
    </div>
  <!-- Email input -->
    <div class="form-outline mb-4">
      <input type="email" id="email" name="email" class="form-control" />
      <label class="form-label" for="form3Example3">Correo electronico</label>
    </div>
    @error('email')
    <p style="color: red">{{$message}}</p>
    @enderror


    <!-- Password input -->
    <div class="form-outline mb-4">
      <input type="password" id="password" name="password" class="form-control" />
      <label class="form-label" for="form3Example4">Contraseña</label>
    </div>
    @error('password')
    <p style="color: red">{{$message}}</p>
    @enderror
  
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Registrarse</button>
    
  </form>
</div>
</div>


@endsection