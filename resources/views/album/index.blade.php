<x-layouts.layout>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Tutti gli album</h1>
            </div>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif 
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Artista</th>
                            <th scope="col">Anno di uscita</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($albums as $album)
                            <tr>
                                <th scope="row">{{$album->id}}</th>
                                <td>{{$album->title}}</td>
                                <td>{{$album->artist}}</td>
                                <td>{{$album->release}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('album_show', $album)}}" class="btn btn-primary">Dettaglio</a>
                                        <a href="{{route('album_edit', $album)}}" class="btn btn-warning ms-2">Modifica</a>
                                        <form action="{{route('album_delete', $album)}}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger ms-2">Cancella</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <h2 class="display-2">Nessun album presente</h2>
                        @endforelse
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>

</x-layouts.layout>