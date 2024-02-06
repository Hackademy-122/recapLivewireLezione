<div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Crea nuovo Album</h1>
            </div>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form wire:submit="createAlbum">

                    <div class="mb-3">
                        <label for="inputTitle" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp" wire:model="title">
                    </div>
                    <div class="mb-3">
                        <label for="inputArtist" class="form-label">Artista</label>
                        <input type="text" class="form-control" id="inputArtist" aria-describedby="artistHelp" wire:model="artist">
                    </div>
                    <div class="mb-3">
                        <label for="inputRelease" class="form-label">Anno di uscita</label>
                        <input type="text" class="form-control" id="inputRelease" aria-describedby="releaseHelp" wire:model="release">
                    </div>

                    <button type="submit" class="btn btn-primary">Crea album</button>
                </form>
            </div>
        </div>
    </div>
</div>