<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Release; 
use Auth;

class Featuredsong extends Component
{
    public $releaseType=null; 
    public $releaseTitle=null;
    public $artistName=null; 
    public $featuredImage=null;
    public $releaseDate=null; 
    public $featuredChannel=null; 

    
    public function render()
    {
        $user=Auth::user(); 
        $releaseInfo=Release::where('username', $user->username)->latest()->get(); 
        $channel=$releaseInfo[0]['']; 
        
        $this->releaseType=$releaseInfo[0]['genre']; 
        $this->releaseTitle=$releaseInfo[0]['release_name']; 
        $this->artistName=$user->name; 
        $this->featuredChannel= ''; 
        $this->featuredImage=$releaseInfo[0]['cover_art'];
        $this->releaseDate='2021-01-19'; 


        return view('livewire.featuredsong');
    }
}
