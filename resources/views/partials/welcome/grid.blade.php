<div class="grille">
    @foreach ($images as $item)
    <div class="grille-item">
        <img height="200px" width="300px" src="{{asset('storage/img/photos/'.$item->url)}}" alt="">
    </div>
        
    @endforeach
    {{-- <div class="grille-item">
        <img height="200px" width="300px" src="{{asset('storage/img/photos/chien.jpeg')}}" alt="">
    </div>
    <div class="grille-item">
        <img height="200px" width="300px" src="{{asset('storage/img/photos/glace.jpeg')}}" alt="">
    </div>
    <div class="grille-item">
        <img height="200px" width="300px" src="{{asset('storage/img/photos/mecstyle.jpeg')}}" alt="">
    </div>
    <div class="grille-item">
        <img height="200px" width="300px" src="{{asset('storage/img/photos/montagne.jpeg')}}" alt="">
    </div>
    <div class="grille-item">
        <img height="200px" width="300px" src="{{asset('storage/img/photos/portrait.jpeg')}}" alt="">
    </div>
    <div class="grille-item">
        <img height="200px" width="300px" src="{{asset('storage/img/photos/rappeur.jpeg')}}" alt="">
    </div>
    <div class="grille-item">
        <img height="200px" width="300px" src="{{asset('storage/img/photos/ville.jpeg')}}" alt="">
    </div> --}}
</div>