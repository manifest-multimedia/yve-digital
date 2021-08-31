<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Royalties;

use Illuminate\Support\Facades\Auth;


class Royaltiestable extends Component
{

    public $user;  
  

    public function render()
    {
        $this->user=Auth::User();
        $username=$this->user->username; 
       // $username='DBlack';
        $royalties=Royalties::where('username', $username)->latest()->paginate(15);

        return view('livewire.royaltiestable', compact('royalties'));

    }
}
