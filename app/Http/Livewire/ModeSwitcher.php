<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Auth; 

class ModeSwitcher extends Component
{

    protected $listeners = ['switchmode' => 'switchmode'];

    public $mode; 

    public function mount(){
        $user_id=Auth::user()->id; 
        $mode=User::where('id', $user_id)->first()->mode;
        switch ($mode) {
            case '':
                $this->mode='light'; 
                break;
            case 'dark':
                $this->mode='dark'; 
                break; 
            case 'light':
                $this->mode='light'; 
            default:
                $this->mode='light'; 
                break;
        } 
        
    }

    public function render()
    {
        return view('livewire.mode-switcher');
    }

    public function switchmode($mode){
    
        $user_id=Auth::user()->id; 

        $update=User::where('id', $user_id)->update([
            'mode'=>$mode,
        ]);

        $this->mode=$mode; 
      

    }
}
