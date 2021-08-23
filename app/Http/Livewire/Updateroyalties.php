<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Royalties;

class Updateroyalties extends Component
{
    public $selectedUser=null; 
    public $users=[]; 
    public $releases=null;
    public $selectedRelease=null;

    public function mount() {

        $this->users=User::all(); 
        $this->releases=collect(); 
    }
    
    public function render()
    {
        
        return view('livewire.updateroyalties');
    }

    public function updatedSelectedUser($value){
        $this->selectedRelease ="Updated Successfully";
        if(!is_null($value)) {
            $this->releases=Royalties::where('username', $value)->get();
        }
   
    }

    // public function updatedSelectedRelease($value){
    //     $this->selectedRelease="Updated"; 
    // }
}
