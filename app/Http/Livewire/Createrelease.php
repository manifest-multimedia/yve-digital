<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Release; 
use App\Models\User;
use App\Scopes\UserScope;

class Createrelease extends Component
{
    use WithFileUploads;

    public $release_name; 
    public $selected_user; 

    public $user_id;

    public $no_of_songs; 
    public $record_label; 
    public $territory; 
    public $release_date; 
    public $cover_art; 
    public $artist=[]; 
    public $display_name;
    public $username;

    public function mount(){
        
        $this->artist=User::withoutGlobalScope(UserScope::class)->orderBy('name','asc')->get(); 

    }

    public function render()
    {
        return view('livewire.createrelease');
    }

    public function resetInput(){

    $this->release_name=null;  
    $this->selected_user=null; 
    $this->no_of_songs=null;
    $this->record_label=null;
    $this->territory=null;
    $this->release_date=null; 
    $this->cover_art=null;
    $this->username=null;

    }

    public function updatedSelectedUser(){

        if(!is_null($this->selected_user)) {

            $artist=User::withoutGlobalScope(UserScope::class)->where('user_id', $this->selected_user)->first();
           
            if(!is_null($artist->name))
            {
                $this->display_name=$artist->name;
                $this->username=$artist->username;
            }

        }


    }

    public function insertRecord(){

    $this->validate([

        'release_name'=>'required',
        'selected_user'=>'required',
        'no_of_songs'=>'required',
        'record_label'=>'required',
        'territory'=>'required', 
        'release_date'=>'required', 
        'cover_art'=>'required|image|max:1024|dimensions:width=2000,height=2000'

    ], [

        'release_name.required' => 'Please provide a name for this release.', 
        'artiste_name.required' => 'Provide a valid Artist for this release',
        'no_of_songs.required' => 'You have not entered the number of songs for the release', 
        'record_label.required' => 'What is the Record Label for this release?', 
        'release_date.required'=>'Please supply a date for this release.', 
        'cover_art.required' => 'You have not uploaded a valid cover art for the release.'

    ]);

    $filename=time().'_'.$this->cover_art->getClientOriginalName(); 
    $filepath=$this->cover_art->storeAs('photos', $filename, 'public'); 

    Release::create(
        [
            'user_id'=>$this->selected_user,
            'release_name' =>$this->release_name, 
            'cover_art' => $filepath, 
            'genre' => 'N/A',
            'artist_name'=>$this->display_name,
            'username' =>$this->username, 
            'territory' =>$this->territory, 
            'releasedate' =>$this->release_date, 
            'record_label' =>$this->record_label, 
            'number_of_songs'=>$this->no_of_songs,
        ]
    );

    session()->flash('message', "Record Saved Successfully for $this->release_name");
    
    $this->resetinput(); 

    }

    

}
