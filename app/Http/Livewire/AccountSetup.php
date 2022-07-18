<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Social;

class AccountSetup extends Component
{
    public $terms;

    public $facebook;
    public $twitter;
    public $instagram;

    public function mount(){
        
       $terms=User::first()->terms; 
       if($terms==1){
        $this->terms=$terms;
       }else {
        $this->terms='';
    }
       

    }

    public function render()
    {
        return view('livewire.account-setup');
    }

    public function updatedTerms(){

        $user_id=session()->get('user_id');
        
        $update=User::where('user_id',$user_id)->update([
            'terms'=>$this->terms,
        ]);

    }


    public function save(){
        
        $this->validate([
            'facebook'=>"required", 
            'twitter'=>"required", 
            "instagram"=>"required", 
        ], [
            'facebook.required'=> "Please provide a valid facebook handle", 
            'twitter.required'=> "Please provide a valid twitter handle", 
            'instagram.required'=> "Please provide a valid instagram handle", 

        ]);
        
        $user_id=session()->get('user_id');

        if(!is_null($user_id)){

            $store_facebook=new Social;
            $store_facebook->platform="facebook"; 
            $store_facebook->profile=$this->facebook;
            $store_facebook->user_id=$user_id; 
            $store_facebook->save(); 
            
            $store_twitter=new Social;
            $store_twitter->platform="twitter"; 
            $store_twitter->profile=$this->twitter;
            $store_twitter->user_id=$user_id; 
            $store_twitter->save(); 
            
            $store_instagram=new Social;
            $store_instagram->platform="instagram"; 
            $store_instagram->profile=$this->instagram;
            $store_instagram->user_id=$user_id; 
            $store_instagram->save(); 
    
            //Output Success Message
    
            //Update Role 
            $update_role=User::where('user_id',$user_id)->update([
                "user_role"=>"user", 
                "account_status"=>"pending", 
            ]); 

        }

        return redirect('dashboard');

    }

}
