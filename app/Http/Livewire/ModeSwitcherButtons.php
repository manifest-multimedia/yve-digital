<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModeSwitcherButtons extends Component
{
    protected $listiners=['darkmode' => 'darkmode'];

    public function render()
    {
        return view('livewire.mode-switcher-buttons');
    }

    public function darkmode(){
        dd('hmm ok');
    }
}
