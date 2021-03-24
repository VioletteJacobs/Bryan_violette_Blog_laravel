@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif

<div class="grille">
    @foreach ($images as $item)
    <div class="grille-item ">
        <span class="p-5 text-white text-center m-5">{{$item->categories->name}} : </span>
        <img height="180px" width="300px" src="{{asset('storage/img/photos/'.$item->url)}}" alt="">
    </div>
        
    @endforeach
    
</div>