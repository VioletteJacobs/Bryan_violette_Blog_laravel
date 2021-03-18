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
      <h1 class="text-center">Voici l'ensemble des utilisatrices de votre site : </h1>
      <span class="py-5">Vous pouvez les supprimer ici.</span>

      <div class="row">
          @foreach ($utilisateurs as $item)
          <div class="col-4 ">
              <div class="card m-1 " >
                  <img class="card-img-top p-4 " height="300px" width="100%"src="{{asset('storage/img/'.$item->avatars->url)}}" alt="Card image cap">
                  <div class="card-body text-center">
                      <h5 class="card-title">Nom d'utilisateur : {{$item->name}} {{$item->firstname}}</h5>
                      <p class="card-text"> Adresse mail : {{$item->email}}</p>
                      <p class="card-text"> Age : {{$item->age}}</p>
                      <form action="utilisateurs/{{$item->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </div>
              </div>

          </div>
            @if ($loop -> iteration%3==0)
                </div>
                <div class="row">
            @endif
          @endforeach
        </div>

  </section>
    
@endsection