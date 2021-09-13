<?php

namespace App\Http\Livewire;

use App\Models\Release; 
use App\Models\Song; 

use Livewire\Component;

class Uploadsongs extends Component
{
    public $release_name;
    public $no_of_songs; 
    public $song; 
    public $upload; 

    public function render()
    {
        $releases = Release::all()->unique('release_name'); 
        $no_of_songs=""; 
        return view('livewire.uploadsongs', compact('releases', 'no_of_songs'));
    }


    public function resetInputs() {

        $this->release_name=null; 
        $this->no_of_songs=null; 
        $this->song=null; 
        $this->upload; 

    }

    public function uploadSong()
    {
        //Validate Request

        $this->validate([
            'release_name' => 'required', 
            'no_of_songs' => 'required', 
            'song' => 'required',
            'upload' =>'required', 
        ],
        [
            'release_name.required' => 'No valid release selected', 
        ]);
        
        /* Count Numberof Songs added to Release and Compare with Number of Songs for Release.
            If the number of songs are equal to the count then send error notification.

        */

        //Upload Song (Store in Public/Songs)


        // Reset Inputs

        $this->resetInputs(); 

        // Return Success Message 
    }



}
