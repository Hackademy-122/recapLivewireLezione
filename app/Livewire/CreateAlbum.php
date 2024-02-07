<?php

namespace App\Livewire;

use App\Models\Album;
use App\Models\Genre;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateAlbum extends Component
{
    use WithFileUploads;

    public $title;
    public $artist;
    public $release;
    public $genresSelected;
    public $allGenres;
    public $photo;

    protected $rules = [
        'title' => 'required',
        'artist' => 'required',
        'release' => 'required',
        'genresSelected'=> 'required',
        'photo'=>'required'
    ];

    public function mount(){
        $this->allGenres = Genre::all();
    }

    public function createAlbum(){

        $this->validate();

        //dd($this->all());

        $album = Album::create([
            'title'=>$this->title,
            'artist'=>$this->artist,
            'release'=>$this->release,
            'user_id'=>Auth::user()->id,
            'img'=> $this->photo->store('public/photos')
        ]);

        foreach($this->genresSelected as $genre){
            $album->genres()->attach($genre);
        }

        // $this->reset();

        $this->resetFormAttributes();

        redirect()->back()->with('message','Album creato correttamente');
    }

    public function resetFormAttributes(){
         $this->title="";
         $this->artist="";
         $this->release="";
         $this->genresSelected=null;
    }

    public function render()
    {
        return view('livewire.create-album');
    }
}
