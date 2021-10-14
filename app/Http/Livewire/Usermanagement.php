<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Usermanagement extends Component
{

    public $users=[]; 
    public $searchTerm; 
    public $results=[]; 

    public function mount(){

        $this->results=User::all();

    }

    public function render()
    {
        $results=$this->results; 

        return view('livewire.usermanagement', compact('results'));
    }

    public function updatedsearchTerm(){
        
        if(!empty($this->searchTerm)){
            $this->results=User::where('username', $this->searchTerm)
            ->orWhere('name', $this->searchTerm)
            ->orWhere('email', $this->searchTerm)
            ->get();
        }

        else {
            $this->results=User::all(); 
        }

        

        // if(!is_null($this->searchTerm)){
            
        //     $this->results=User::where('username', '==' , $this->searchTerm )->get(); 
        // }

        // else {
        //     $this->results=User::all(); 
        // }
       
        // // $this->results=['jay','joe']; 

        // dd($this->results); 
    }

}
