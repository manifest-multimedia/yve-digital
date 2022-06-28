<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Scopes\UserScope;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Hash;
use App\Models\Song; 
use App\Models\Royalties;

class ArtistTracker extends Component
{

    public $search;
    public $found; 
    public $selected_user;
    public $response;
    public $terms;
    public $selected_ID; 
    public $user_id;

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
        
        return redirect('login');
    }



}
