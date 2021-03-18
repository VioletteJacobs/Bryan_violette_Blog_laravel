@extends('layouts.app')
@section('content')
<div class="row">
  @include('partials.admin.nav2')
  <div class="col-9">
    <section class="container">
      <div class="grille">
        @foreach ($images as $item)
        <div class="grille-item">
          <img height="200px" width="300px" src="{{asset('storage/img/photos/'.$item->url)}}" alt="">
        </div>
        <div>
          <button type="submit" class="btn btn-primary"><a href="/download-files/{{$item->id}}" style="color: white">Download</a></button>
        </div>
        @endforeach
      </div>
      <form action="images" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Ajouter une nouvelle photo</label>
          <input type="file" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <select class="form-control" name="category_id">
          @foreach ($categories as $element)
          <option value="{{$element->id}}">{{$element->name}}</option>
          @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </section>
  </div>
</div>
    
@endsection