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
    
@endsection