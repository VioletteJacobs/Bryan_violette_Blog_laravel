@extends('layouts.app')
@section('content')

<div class="row" style="height:100vh">
  @include('partials.admin.nav2')
  <div class="col-9">
    <section class="container">
      <h1 class="text-center">Voici l'ensemble des utilisatrices de votre site : </h1>
      <span class="py-5">Vous pouvez les supprimer ici.</span>
      
      <div class="row">
        @foreach ($utilisateurs as $item)
        @can("user-card", $item)
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
        @endcan
        @if ($loop -> iteration%3==0)
      </div>
      <div class="row">
        @endif
        @endforeach
      </div>
      {{-- <div class="container">
        
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div> --}}
      
    </section>
  </div>
  
</div>
  
  @endsection