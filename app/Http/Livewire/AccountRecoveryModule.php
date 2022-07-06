<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User; 
use Illuminate\Support\Facades\Notification;
use App\Notifications\AccountRecoveryNotification;


class AccountRecoveryModule extends Component
{


    public $usernames; 
    public $selected_username;

    public $email; 

    public function mount(){
        $this->email='';
        $this->selected_username='';
    }


    public function render()
    {

        $this->usernames=User::withoutGlobalScopes()->all(); 

        return view('livewire.account-recovery-module');

    }

    public function send(){

        $this->validate([
            'email'=>'required', 
            'selected_username'=>'required',
        ],[
            'email.required'=>"Please provide a valid email", 
            'selected_username.required'=>'Select a User'
        ]);
    
        $subject='';
        $message=''; 
        $action='';
        //Send

       $send=Notification::route('mail', $this->email)->notify(new AccountRecoveryNotification($this->selected_username, $subject, $message, $action));
       session()->flash('success', 'Email Successfully sent');
        return redirect('recover');

       
    }
}
