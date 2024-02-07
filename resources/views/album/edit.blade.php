<x-layouts.layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Modifica album, {{$album->title}}</h1>
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
                <form method="POST" action="{{route('album_update', $album)}}">

                    @method('put')
                    @csrf
                    
                    <div class="mb-3">
                        <label for="inputTitle" class="form-label">Titolo</label>
                        <input name="title" type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp" value="{{$album->title}}">
                        @error('title') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputArtist" class="form-label">Artista</label>
                        <input name="artist" type="text" class="form-control" id="inputArtist" aria-describedby="artistHelp" value="{{$album->artist}}">
                        @error('artist') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputRelease" class="form-label">Anno di uscita</label>
                        <input name="release" type="text" class="form-control" id="inputRelease" aria-describedby="releaseHelp" value="{{$album->release}}">
                        @error('release') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputGenres" class="form-label">Genere/i:</label>
                        <select multiple id="inputGenres" class="form-control" name="genresSelected[]">
                            @foreach($allGenres as $genre)
                                <option value="{{$genre->id}}" @if($album->genres->contains($genre->id)) disabled @endif>{{$genre->name}}</option>
                            @endforeach
                        </select>
                        @error('genresSelected') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Modifica album</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.layout>