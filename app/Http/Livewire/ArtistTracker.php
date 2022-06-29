<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Scopes\UserScope;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Hash;
use App\Models\Song; 
use App\Models\Royalties;
use App\Models\Social;

class ArtistTracker extends Component
{

    public $search;
    public $found; 
    public $selected_user;
    public $response;
    public $terms;
    public $selected_ID; 
    public $user_id;
    public $old_user_id;

    public $facebook;
    public $instagram;
    public $twitter;

    public $name;
    public $email;
    public $password;
    public $passwordconfirmation;

    public function mount($username){
        
        $search=User::where('username', $username)->orWhere('user_id', $username)->first();


        if(!is_null($search)){

            $this->response="success";
            $this->selected_user=$search->username;
            $this->selected_ID=$search->id; 

            if(!is_null($search->user_id)){
                $this->old_user_id=$search->user_id;
            } 

            //Check Terms
            switch ($search->terms) {
                case '':
                    $this->terms='';
                    break;
                case 0:
                    $this->terms='';
                    break;
                case 1:
                    $this->terms=1;
                default:
                    # code...
                    break;
            }

        }
        else{
            $this->response="error";
            $this->selected_user='User';
        }


        
    }

    public function render()
    {
        return view('livewire.artist-tracker');
    }

    public function updatedTerms(){
       //Update
       $save=User::where('id', $this->selected_ID);
       $save->update([
        'terms'=>$this->terms, 
       ]);
      
    }

    public function save(){
        
        //validateInput

        $this->validate([
            'email'=>'required', 
            'password'=>'required|min:6', 
            'passwordconfirmation'=>'required|same:password|min:6', 
            'name'=>'required'
        ], 
        [
            'email.required'=>'Please Provide a Valid Email',
            'password.required'=>'Kindly provide a password for your account',
            'passwordconfirmation.required'=>'Password Confirmation Field is Empty',
            'name.required'=>"The Name Field is Required",
            'passwordconfirmation.same' =>"Password confirmation mismatch", 
            'passwordconfirmation.min'=>'The password confirmation must be at least 6 characters'
            ]
        );

        //Generate Unique ID for User
        $this->user_id=IdGenerator::generate(['table' => 'users', 'field'=>'user_id', 'length' => 15, 'prefix' => 'usr_'.date('y').'_']);
        
        //Update Details
        $update=User::where('id', $this->selected_ID)->first();
        $update=$update->update([
            'name'=>$this->name, 
            'email'=>$this->email, 
            'user_id'=>$this->user_id,
            'password'=>Hash::make($this->password),
    ]);

        //Assign ID to all Models 
        $username=$this->selected_user;
        //Songs
        $updatesongs=Song::where('username', $username)->update([
            'user_id'=>$this->user_id
        ]);
        
        //Royalties
        $updateroyalties=Royalties::where('username', $username)->update([
            'user_id'=>$this->user_id
        ]);
        
        //Update Socials
        if(!is_null($this->facebook)){


            $checkfacebook=Social::where('user_id', $this->old_user_id)
            ->where('platform', 'facebook')->get();
            
            if($checkfacebook->count()===1){

                $checkfacebook=Social::where('user_id', $this->old_user_id)
                ->where('platform', 'facebook')->update([
                    'profile'=>$this->facebook, 
                    'user_id'=>$this->user_id, 
                ]);

            } else{

                $updatefacebook=new Social;
                $updatefacebook->user_id=$this->user_id;
                $updatefacebook->platform='facebook';
                $updatefacebook->profile=$this->facebook;
                $updatefacebook->save();
            }

        }
      
        if(!is_null($this->twitter)){

            $checktwitter=Social::where('user_id',$this->old_user_id)
            ->where('platform', 'twitter')->get();

            if($checktwitter->count()===1){

                $checktwitter=Social::where('user_id',$this->old_user_id)
                ->where('platform', 'twitter')->update([
                    'profile'=>$this->twitter, 
                    'user_id' =>$this->user_id, 
                ]);

            } else{
                
                $updatetwitter=new Social;
                $updatetwitter->user_id=$this->user_id;
                $updatetwitter->platform='twitter';
                $updatetwitter->profile=$this->twitter;
                $updatetwitter->save();
            }

        }
      
        if(!is_null($this->instagram)){

            $checkinstagram=Social::where('user_id', $this->old_user_id)
            ->where('platform', 'instagram')->get();
            
            
            if($checkinstagram->count()===1){
                
                $checkinstagram=Social::where('user_id', $this->old_user_id)
                ->where('platform', 'instagram')->update([
                    'profile' => $this->instagram,
                    'user_id' => $this->user_id, 
                ]);

            } else{

                $updateinstagram=new Social;
                $updateinstagram->user_id=$this->user_id;
                $updateinstagram->platform='instagram';
                $updateinstagram->profile=$this->instagram;
                $updateinstagram->save();

            }

        }

        return redirect('login');

    }



}
