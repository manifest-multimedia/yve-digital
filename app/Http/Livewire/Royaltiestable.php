<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Royalties;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class Royaltiestable extends Component
{
    use WithPagination;

    public $user;  
    public $sort_period=null; 
   

    public function mount(){

        $this->user=Auth::User();
                
    }

    public function render()
    {
        
        $username=$this->user->username;

        $period=$royalties=Royalties::where('username',$username)->latest()->get();
    
        if(!is_null($this->sort_period) || !empty($sort_period)){
            $royalties=Royalties::where('username', $username)
            ->where('period_gained', $this->sort_period)
            ->latest()->paginate(15);

            $earnings=$royalties->sum('revenue'); 
        }

        else{

            $username=$this->user->username;
            $royalties=Royalties::where('username',$username)->latest()->paginate(15); 
            $earnings=$royalties->sum('revenue'); 
        }
        return view('livewire.royaltiestable', compact('royalties', 'earnings', 'period'));

    }

    public function updatedSortPeriod($value){
        $value=$value; 
        if(empty($value)) {
            $this->sort_period=null; 
        }

        

    }
}
