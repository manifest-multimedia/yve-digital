<?php


namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User; 
use App\Models\Release; 

use Illuminate\Support\Facades\DB; 

class Royalties extends Component
{

    public $selectedUser = null;
    public $releases = null;
    public $users; 

    public function mount(){

        $this->users=User::all(); 
      
    } 

    public function render(){

            return view('livewire.royalties');

    }

    public function updatedSelectedUser($selectedUser) {

        $this->releases=DB::table('royalties')
        ->where('username', $selectedUser)
        ->get();

    }

}

