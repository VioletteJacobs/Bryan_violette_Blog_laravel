@extends('layouts.app')
@section('content')

<ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link active" href="categories">Catégories d'images</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="images">Images</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="utilisateurs">Utilisateurs</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="avatars">Avatars</a>
    </li>
  </ul>

  <section class="container">
    <h1 class="text-center">Voici les avatars disponibles pour vos utilisatrices</h1>
    <div class="container">

      @foreach ($avatars as $item)
      <div class="border d-flex align-items-center justify-content-center">
        <img src="{{asset('storage/img/'.$item->url)}}" alt="" srcset="" height="200px" width="200px">
        <div class="m-2">
          
                <form action="/avatars/{{$item->id}}" method="POST">
          
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-danger">Delete</button>
          
                </form>
  
        </div>

      </div>

      
      @endforeach
    </div>

    <div class="container m-5 text-center">

      <form action="avatars" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file">
        <button type="submit" class="btn btn-warning">Ajouter</button>
      </form>

    </div>

  </section>
    
@endsection