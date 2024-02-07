<x-layouts.layout>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Dettaglio di {{$album->title}}</h1>
            </div>
        </div>
    </div>
    
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($album->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$album->title}}</h5>
                        <h4>Artista</h3>
                        <p class="card-text">{{$album->artist}}</p>
                        <h4>Anno di rilascio</h3>
                        <p class="card-text">{{$album->release}}</p>
                        <h4>Utente che ha inserito l'album</h4>
                        <p class="card-text">{{$album->user->name}}</p>
                        <h4>Genree/i:</h4>
                        @forelse($album->genres as $genre)
                            <p class="card-text">{{$genre->name}}</p>
                        @empty
                            <h5>Genere non specificato</h5>
                        @endforelse

                        <a href="{{url()->previous()}}" class="btn btn-primary">Torna alla pagina precedente</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layouts.layout>