<?php

namespace App\Livewire;

use App\Models\Album;
use Livewire\Component;

class CreateAlbum extends Component
{
    public $title;
    public $artist;
    public $release;

    public function createAlbum(){
        Album::create([
            'title'=>$this->title,
            'artist'=>$this->artist,
            'release'=>$this->release
        ]);

        $this->reset();

        redirect()->back()->with('message','Album creato correttamente');
    }

    public function render()
    {
        return view('livewire.create-album');
    }
}
