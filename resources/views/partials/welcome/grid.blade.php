<div class="grille">
    @foreach ($images as $item)
    <div class="grille-item">
        <img height="180px" width="300px" src="{{asset('storage/img/photos/'.$item->url)}}" alt="">
        <span class="p-5 text-white">{{$item->categories->name}}</span>
    </div>
        
    @endforeach
    
</div>