<x-layouts.layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center display-1">Blog Music h122</h1>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center">
            @forelse ($albums as $album)
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{$album->title}}</h5>
                        <h4>Artista</h3>
                        <p class="card-text">{{$album->artist}}</p>
                        <h4>Anno di rilascio</h3>
                        <p class="card-text">{{$album->release}}</p>

                        <a href="{{route('album_show', $album)}}" class="btn btn-primary">Dettaglio</a>
                    </div>
                </div>
            </div>
            @empty
                <h4>Nessun album inserito</h4>
            @endforelse
        </div>
    </div>

</x-layouts.layout>