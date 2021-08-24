<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Royalties;

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

    public function mount() {

        $platformsArray=array(

            [
                'name' => 'YouTube',
                'icon'  =>  asset('images/youtube.png'), 
            ],

            [
                'name' => 'Spotify',
                'icon' => asset('images/spotify.png'), 
            ], 
           
            [
                'name' => 'Vimeo',
                'icon' => asset('images/vimeo.png'),
            ], 
           
            [
                'name' => 'Deezer',
                'icon' => asset('images/deezer.png'),
            ],
           
            [
                'name' => 'Tidal', 
                'icon' => asset('images/tidal.png'),
            ],
           
            [
                'name' => 'Apple Music',
                'icon' => asset('images/apple_music.png'),
            ],

           
            [
                'name' => 'Vevo', 
                'icon' => asset('images/vevo.png'),
            ],
           
            [
                'name' => 'Amazon', 
                'icon' => asset('images/amazon.png'),
            ],

        ); 

       $platformsArray=json_decode(json_encode($platformsArray, FALSE)); 


        $this->users=User::all(); 
        $this->releases=collect(); 
        $this->platforms=$platformsArray; 
    }
    
    public function render()
    {
        $platformsArray=array(

            [
                'name' => 'YouTube',
                'icon'  =>  asset('images/youtube.png'), 
            ],

            [
                'name' => 'Spotify',
                'icon' => asset('images/spotify.png'), 
            ], 
           
            [
                'name' => 'Vimeo',
                'icon' => asset('images/vimeo.png'),
            ], 
           
            [
                'name' => 'Deezer',
                'icon' => asset('images/deezer.png'),
            ],
           
            [
                'name' => 'Tidal', 
                'icon' => asset('images/tidal.png'),
            ],
           
            [
                'name' => 'Apple Music',
                'icon' => asset('images/apple_music.png'),
            ],

           
            [
                'name' => 'Vevo', 
                'icon' => asset('images/vevo.png'),
            ],
           
            [
                'name' => 'Amazon', 
                'icon' => asset('images/amazon.png'),
            ],

        ); 

       $platformsArray=json_decode(json_encode($platformsArray, FALSE)); 
       $platforms=$this->platforms=$platformsArray;

        return view('livewire.updateroyalties', compact($platforms));
    }

    public function updatedSelectedUser($value){
       
        if(!is_null($value)) {
            $this->releases=Royalties::where('username', $value)->get()->unique('song_name');
        }
   
    }

    public function updatedSelectedPlatform($value){
        
        

    }
  
}
