<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Royalties;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Gate;


use Carbon\Carbon;


class Royaltiestable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $user;  
    public $selectedUser=null; 
    public $sort_period=null; 
    public $status=null;
    public $edit=[]; 
    public $record=null; 

    public $release_name=null; 
    public $song_name=null;
    public $revenue=null; 
    public $downloads=null; 
    public $streams=null; 
    public $platform=null; 
    public $period_gained=null; 

    public $totalrevenue;

   

    public function mount(){

        $this->user=Auth::User();
        $this->status="show";

        $this->totalrevenue=Royalties::sum('revenue');
       
    }
   
    public function render()
    {
        
            $username=$this->user->username;

            $period=$royalties=Royalties::get()->unique('period_gained');
        
            if(!is_null($this->sort_period) || !empty($sort_period)){
                $royalties=Royalties::where('period_gained', $this->sort_period)->latest()->paginate(10);
    
                $earnings=Royalties::where('period_gained', $this->sort_period)->sum('revenue'); 
            }
    
            else{
    
                $username=$this->user->username;
                $royalties=Royalties::paginate(10); 
                $earnings=Royalties::sum('revenue'); 
            }

            return view('livewire.royaltiestable', compact('royalties', 'earnings', 'period'));

        
        }
       
    

}
