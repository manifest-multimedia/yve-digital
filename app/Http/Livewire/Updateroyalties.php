<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Royalties;
use App\Models\Platform;
use App\Models\Song;
use Auth; 

/*  *   Written by Johnson Sebire

    *   Date: 8/23/2021 

    *   This Livewire Component Enables us to Dynamically List All System Users
        matching them with their songs as stored in the Royalties Table and to have 
        new entries for royalties gained from all music distribution platforms. 

        Once a User is Selected, the songs for that user would be uniquely listed 
        (I use the unique() function to achieve this) in the Song Drop Down Box so admin can select 
        and update records for that song and user.

    *   We can use "use DB;" in place of individual models.
        In this case we'd use the query builder together with the DB Facade
        to perform queries on our tables. 

        e.g.    $this->users=DB::table('users')->get(); 
                $this->releases=DB::table('royalties')->where('username', $value)->get()->unique('song_name').
    *   We use the unique() function to eleminate duplicates from the retrieved collection.

    Multiple Entries for the same song and user are listed in the royalties table; hence using the unique function; 
    we clear duplications from the retreived collection to keep things serene.
        
    
*/

class Updateroyalties extends Component
{
    public $selectedUser=null; 
    public $users=[]; 
    public $releases=[];
    public $selectedSong=null;
    public $platforms=[]; 
    public $selectedPlatform;

    //public $entryDate; 

    public $enteredBy=null;
    public $downloads=null; 
    public $streams=null; 
    public $earnings=null; 
    public $periodStart=null; 
    public $periodEnd=null; 
    public $periodGained=null; 

    public function mount() {

        $this->users=User::orderBy('name','asc')->get(); 
        $this->releases=collect(); 
        $this->platforms=Platform::all();
      
    }
    
    public function render()
    {
        return view('livewire.updateroyalties');
    }

    public function updatedSelectedUser($value){
       
        if(!is_null($value)) {
            // $this->releases=Royalties::where('username', $value)->get()->unique('song_name');
            $this->releases=Song::where('username', $value)->get()->unique('song');

        }
   
    }

    public function updatedSelectedPlatform($value){

    }

    public function resetInput() {
        $this->selectedPlatform=null; 
        $this->selectedSong=null; 
        $this->downloads=null; 
        $this->earnings=null; 
        $this->streams=null; 
        $this->periodGained=null; 
        
    }

    public function insertRecord(){

        $this->validate([
            'selectedUser' => 'required', 
            'selectedSong' => 'required', 
            'periodStart' => 'required', 
            'periodEnd' => 'required', 
            'selectedPlatform' => 'required', 
            'downloads' => 'required', 
            'streams' => 'required', 
            'earnings' => 'required'
        ], [
            'selectedUser.required' => 'You must Select a User to Record Entry',
            'selectedSong.required' => 'Please select a Song to Continue', 
            'periodStart.required' => 'You have not selected the Period Start Date for this entry', 
            'periodEnd.required' => 'The period end date is is required', 
            'selectedPlatform.required' => 'You are required to select a Platform for Entry', 
            'downloads.required' => "You are required to enter a valid input for downloads. Type 0 if null",
            'streams.required' => "You are required to enter a valid input for streams. Type 0 if null", 
            'earnings.required' => "You are required to enter a valid input for earnings. Type 0 if null"

        ]); 

        $period_gained = $this->periodStart.' - '.$this->periodEnd; 

        $period_gained=retrieveMonths($period_gained);
        
        Royalties::create([

            'username' => $this->selectedUser, 
            'song_name' => $this->selectedSong, 
            'downloads' => $this->downloads, 
            'revenue' => $this->earnings, 

            'period_gained' => $period_gained, 

            'platform' => $this->selectedPlatform, 
            'total_streams' =>$this->streams, 
            ''
        ]); 

        session()->flash('message', "Record Saved Successfully for $this->selectedPlatform");
        $this->resetinput(); 
        
    }
  
}
