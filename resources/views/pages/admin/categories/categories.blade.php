@extends('layouts.app')
@section('content')
<div class="row" style="height:100vh">
  @include('partials.admin.nav2')
  <div class="col-9">
    <section class="container">
      <h1 class="text-center">Les catégories déjà présentes</h1>
      <div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Delete</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $item)
            <tr>
              <td>{{$item->name}}</td>
              <td>
                <form action="/categories/{{$item->id}}" method="POST">
                  @csrf
                  @method("DELETE")
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
              
              <td>
                <a href="/categories/{{$item->id}}/edit" class="btn btn-success">Edit</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
    </section>
  </div>
  
</div>
  @endsection