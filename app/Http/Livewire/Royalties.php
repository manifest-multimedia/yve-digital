<?php


namespace App\Http\Livewire;

use Livewire\Component;
use DB; 

class Royalties extends Component
{
    public $selectUser=NULL; 

    public function render()
    {

        
        $users=DB::table('users')
        ->where('user_role', 'user')
        ->get(); 

        //$selected=$this->selectUser; 
       
        if(!is_null($selected=$this->selectUser)){
            
        $releases=DB::table('royalties')
            ->where('username', $selected)
            ->get(); 
        
       } else {
        $releases=DB::table('royalties')->get(); 
       }
            
            return view('livewire.royalties', compact('users', 'releases'));
        

    }

   

}
