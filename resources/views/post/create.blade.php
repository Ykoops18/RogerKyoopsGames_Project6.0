@extends('layout.layoutprincipal')

@push('styles')
    <link rel="stylesheet" href="{{asset('asset/css/dropzone.min.css')}}">
@endpush

@section('contenido')
<div class="row">
    <div class="col-4 p-5 text-center m-2 rounded-2">
        <form action="{{ route('imagenes.store') }}" method="POST" enctype="multipart/form-data"
                id="dropzone" class="dropzone rounded border border-1 w-100 h-100 items-center d-flex align-items-center justify-content-center">
        @csrf
         </form>
    </div>
 
    <div class="col-7 p-5 text-center m-2 rounded-2 border">
        <h2 class="mb-3">Crea tu nuevo post</h2>
        <form action="{{ route('post.store') }}" method="POST" novalidate>
            @csrf
            <div class="form-outline m-3">
                <input type="text" id="typeText" class="form-control" name="titulo" />
                <label class="form-label" for="typeText">Titulo</label>
            </div>
            @error('titulo')
                <p style="color: red">{{$message}}</p>
            @enderror
            <div class="form-outline m-3">
                <textarea class="form-control" name="descripcion" id="textAreaExample" rows="4"></textarea>
                <label class="form-label" for="textAreaExample">Mensaje</label>
            </div>
            @error('descripcion')
                <p style="color: red">{{$message}}</p>
            @enderror
            <div>
                <input name="imagen" id="imagen" type="hidden" value= {{ old('imagen') }} />
            </div>
            @error('imagen')
                <p style="color:red">{{ $message }}</p>
            @enderror
            

        <button type="submit" class="btn btn-outline btn-lg text-white" style="background-color: #332d2d"><i class="far fa-plus-square  px-1" ></i>Postear</button>
        </form>
    </div>
</div>
@endsection