@extends('layouts.app')
@section('content')
<div class="row">
  @include('partials.admin.nav2')
  <div class="col-9">
    
    <section class="container">
      <h1 class="text-center my-5">Voici les avatars disponibles pour vos utilisatrices </h1>
      <div class="container">
        
        @foreach ($avatars as $item)
        <div class="border d-flex align-items-center justify-content-center">
          <img src="{{asset('storage/img/'.$item->url)}}" alt="" srcset="" height="200px" width="300px">
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
        
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        
        <form action="/avatars" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="file" name="url">
          <button type="submit" class="btn btn-warning">Ajouter</button>
        </form>
        
      </div>
      
    </section>
  </div>
  </div>
    
    @endsection