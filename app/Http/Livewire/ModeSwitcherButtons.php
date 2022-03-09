<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModeSwitcherButtons extends Component
{
    public $mode; 
    
    public function mount(){
        $this->mode='Not Clicked';
    }
    
    public function render()
    {
        return view('livewire.mode-switcher-buttons');
    }
   
    public function save(){
        $this->mode='Clicked';
    }

}
