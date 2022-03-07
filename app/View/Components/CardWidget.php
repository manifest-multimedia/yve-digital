<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardWidget extends Component
{
    public $icon;
    public $title; 
    public $value; 
    public $description; 
    public $type; 
    public $percentage;
    public $color; 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($icon, $color, $title, $value, $description, $type, $percentage)
    {   
        $this->icon=$icon; 
        $this->color=$color;
        $this->title=$title; 
        $this->value=$value;
        $this->description=$description;
        $this->type=$type;
        $this->percentage=$percentage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-widget');
    }
}
