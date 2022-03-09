<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User; 
use Auth; 

class Mode extends Component
{
    public $mode; 
    public $icon; 
    public $user_id; 
    public function mount(){
        $this->user_id=Auth::user()->id; 
        $mode=User::where('id', $this->user_id)->first()->mode;
        
        switch ($mode) {
            case '':
                
                $this->mode='light'; 
                $this->icon="dark_mode"; 
                # code...
                break;
            case 'dark':
                $this->mode='dark'; 
                $this->icon='light_mode'; 
                break; 
            default:
                $this->mode='light'; 
                $this->icon='dark_mode'; 
                break;
        }
    }
    public function render()
    {
        return view('livewire.mode');
    }
    public function switchmode(){
        switch ($this->mode) {
            case 'light':
                $this->icon='light_mode';
                $this->mode='dark'; 
                $this->emit('switchmode', $this->mode); 
                # code...
                break;
            case 'dark':
                $this->icon='dark_mode'; 
                $this->mode='light'; 
                $this->emit('switchmode', $this->mode); 
            default:
                # code...
                break;
        }
    }
}
