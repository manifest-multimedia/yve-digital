<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Topdownloaded extends Component
{
    public $topdownloads=[]; 
    public $topstreams=[]; 

    public function mount(){
        $this->topdownloads=[
            [
                'song' => "Song Name", 
                'artist' => "Artist Name", 
                'downloads' => "20",
                'cover' => 'images/mg2.png'
            ]
            
        ]; 

        $this->topstreams=[
            [
                'song' => "Song Name", 
                'artist' => "Artist Name", 
                'downloads' => "20",
                'cover' => 'images/mg2.png'
            ]
            
        ]; 
    }
    
    public function render()
    {
        return view('livewire.topdownloaded');
    }
}
