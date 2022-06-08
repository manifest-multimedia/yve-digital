<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Scopes\UserScope;

class ArtistTracker extends Component
{

    public $search;
    public $found; 

    public function render()
    {
        return view('livewire.artist-tracker');
    }

    public function updatedSearch(){
        $terms=$this->search;

        $result=User::withoutGlobalScope(new UserScope)->where('name', 'like', '%' . $terms . '%')->get();

        if($result){
            $this->found=$result;
        }

    }




}
