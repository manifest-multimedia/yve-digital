<?php

namespace App\Http\Livewire;

use App\Models\Release; 
use App\Models\Song; 
use App\Models\User;
use App\Scopes\UserScope;

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
    public $username;
    public $artist_name;

    public function mount(){

        $this->artists=User::withoutGlobalScope(UserScope::class)->orderBy('name','asc')->get(); 

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

            $releases= Release::withoutGlobalScope(UserScope::class)->where('user_id', $this->selectedArtist)->get()->unique('release_name'); 
            $this->releases =$releases;
            
            $artist=User::withoutGlobalScope(UserScope::class)->where('user_id', $this->selectedArtist)->first();
            $this->username=$artist->username;
            $this->artist_name=$artist->name;
        }
    }
    public function updatedReleaseName(){

        if(!is_null($this->release_name)){
            
            $name_of_artist=collect(Release::withoutGlobalScope(UserScope::class)->where('release_name', $this->release_name)->get()->unique('artist_name'));
            $name_of_artist=$name_of_artist[0]['artist_name']; 
            $number_of_songs=Release::withoutGlobalScope(UserScope::class)->where('release_name', $this->release_name)->get();
            $count=$number_of_songs->count();
            $this->songs_count=$count;
            $number_of_songs=$number_of_songs[0]['number_of_songs'];
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

        if($this->songs_count <= $this->number_of_songs)
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
                    'user_id' => $this->selectedArtist, 
                    'release' =>$this->release_name, 
                    'song' => $this->song, 
                    'song_url' => $uploadpath,
                    'artist' => $this->artist_name, 
                    'genre' => $this->genre, 
                    'username'=>$this->username,
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
