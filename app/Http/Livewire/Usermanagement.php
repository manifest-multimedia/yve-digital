<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use App\Scopes\UserScope;


class Usermanagement extends Component
{
    use WithPagination; 
    protected $paginationTheme = 'bootstrap';

    public $users=[]; 
    public $searchTerm; 
    protected $results=null; 

    public function mount(){


    }

    public function render()
    {
        $results=$this->results;
        
        if(is_null($results)) {
            return view('livewire.usermanagement', [
                'results'=> $this->results=User::withoutGlobalScope(UserScope::class)->paginate(20)
            ]);

        } else{
           
            return view('livewire.usermanagement', [
                'results' => $results
            ]);
        }

    }

    public function updatedsearchTerm(){
        
        if(!empty($this->searchTerm)){
            $this->results=User::withoutGlobalScope(UserScope::class)->where('username', $this->searchTerm)
            ->orWhere('name', $this->searchTerm)
            ->orWhere('email', $this->searchTerm)
            ->paginate(20);
        }

        else {
            $this->results=User::withoutGlobalScope(UserScope::class)->paginate(20); 
           
        }
       
    }

}
