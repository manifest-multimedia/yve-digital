<?php

namespace App\Http\Livewire;

use App\Models\Release; 
use App\Models\Song; 
use App\Models\User;

use Livewire\WithFileUploads;

use Livewire\Component;

class Uploadsongs extends Component
{
    use WithFileUploads;

    public $release_name;
    public $number_of_songs; 
    public $song; 
    public $upload; 
    public $artists;
    public $selectedArtist;
    public $songs_count; 
    public $releases=[]; 
    public $genre;

    public function mount(){

        $this->artists=User::orderBy('name','asc')->get(); 
    }

    public function render()
    {
        return view('livewire.uploadsongs');
    }

    public function resetInputs() {

        $this->release_name=null; 
        $this->number_of_songs=null; 
        $this->song=null; 
        $this->upload; 

    }

    public function updatedSelectedArtist(){

        if(!is_null($this->selectedArtist)){

            $this->releases = Release::where('artist_name', $this->selectedArtist)->get()->unique('release_name'); 
            
        }
    }
    public function updatedReleaseName(){

        if(!is_null($this->release_name)){
            
            $name_of_artist=collect(Release::where('release_name', $this->release_name)->get()->unique('artist_name'));
                     
            $name_of_artist=$name_of_artist[0]['artist_name']; 
           
            $number_of_songs=Release::where('release_name', $this->release_name)->get();
            $count=$number_of_songs->count();
            $number_of_songs=$number_of_songs[0]['number_of_songs'];
            $this->songs_count=$count;
           // $this->artist=$name_of_artist;
            $this->number_of_songs=$number_of_songs; 
        
        }

    }

    public function uploadSong()
    {
        //Validate Request

        $this->validate([
            'release_name' => 'required', 
            'song' => 'required',
            'genre' =>'required', 
            'selectedArtist' => 'required'
        ],
        [
            'release_name.required' => 'No valid release selected', 
            'selectedArtist.required' => 'Invalid Artist',
            'genre.required' => 'Provide a Valid Genre for this Song'
        ]);
        
        /* Count Numberof Songs added to Release and Compare with Number of Songs for Release.
            If the number of songs are equal to the count then send error notification.
        */

        if($this->number_of_songs<$this->songs_count)
        {
            if (!is_null($this->upload)){

                $uploadname=time().'_'.$this->upload->getClientOriginalName(); 
                $uploadpath=$this->upload->storeAs('songs', $uploadname, 'public'); 
                
            } 

            else {

                $uploadpath=""; 

            }

            Song::create(

                [
                    'release' =>$this->release_name, 
                    'song' => $this->song, 
                    'song_url' => $uploadpath,
                    'artist' => $this->selectedArtist, 
                    'genre' => $this->genre
                ]

            );
            
            // Return Success Message 
            session()->flash('message', "Record Saved Successfully for $this->release_name");
            
            // Reset Inputs
            $this->resetInputs(); 
        }
        else {
            session()->flash('message', "You have exceeded the number of songs for this release.");
            
        }
    

    }



}
