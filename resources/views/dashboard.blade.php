
@extends('layout.layoutprincipal')




@section('muro') 

<div class="card border border-dark mt-2 mb-3" >
    <div class="card-header">
        <div class="container">
            <div class="row ">
                <div class="col-2 ">
                    <img class="card-img-left w-50 p-3" src="{{ asset('asset/img/usuario.png') }}">
                </div>
                <div class="col-5 ">
                    <h2 class="p-3 ">Bienvenido {{ auth()->user()->username }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body text-dark">
      
      
    
    
      <!-- create a post  - -->
@auth
        <div class="d-flex align-items-center">
          <a type="button" href="{{ route('post.create')}}" class="btn btn-link px-3 me-2" >
          <i class="fas fa-camera"></i> crear post
          </a>
          <form action="{{ route('logout') }}" method="post">
            @csrf
          <button type="submit" class="btn btn-link px-3 me-2">
            Cerrar sesion
          </button>
         </form>
        </div>
        @endauth

    </div>
  </div>

<!-- post uploaded -->
<div class="card-body border border-opacity-75 text-dark p-5" style="background-color: rgba(128, 128, 128, 0.10)">
 
       @if($posts -> count())
       <h1 class="card-title text-center">PUBLICACIONES</h1>
       <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($posts as $post)
        <div class="col">
          <div class="card h-100">
            <img src="{{ asset('uploads').'/'.$post->imagen }}" class="card-img-top" alt="Devstagram"/>
            <div class="card-body">
              <h5 class="card-title">{{ $post->titulo }}</h5>
              <p class="card-text">
                <small class="text-info">{{ '@'.$post->user->username }}</small>
                <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
              </p>
            </div>
            <div class="card-footer">
              <a href="{{ route('post.show', ['post' => $post , 'user' => $user]) }}" ><i class="far fa-comment"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <div> {{ $posts->links('pagination::bootstrap-5') }}
       @else
       <h1 class="text-center">Aún no tienes publicaciones</h1>
       @endif
      </div>
</div>
@endsection
<!-- Dashboard of images  -->
  



