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
      <a class="nav-link " href="avatars">Avatars</a>
    </li>
  </ul>

  <section class="container">

        @if ($errors->any()) 
            <div class="alert alert-danger"> 
                <ul> @foreach ($errors->all() as $error) 
                    <li>{{ $error }}</li> @endforeach 
                </ul> 
            </div> 
        @endif

    <form action="/categories/{{$edit->id}}" method="POST">
        @csrf
        @method("PUT")
        <label for="">Nom : </label>
        <input type="text" value="{{old($edit->name) ? old($edit->name) : $date->$edit->name}} ">
        <button type="submit" class="btn btn-danger">Update</button>
    </form>



      
          
    </div>

  </section>
    
@endsection