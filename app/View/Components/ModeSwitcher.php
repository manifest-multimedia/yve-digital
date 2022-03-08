<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModeSwitcher extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     protected $listners=['darkmode' =>'darkmode'];

    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mode-switcher');
    }

    public function darkmode(){
       dd('received darkmode'); 
    }
}
