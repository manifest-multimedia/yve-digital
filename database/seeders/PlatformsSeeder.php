<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PlatformsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert(

            [

                [ 
                    'platform' => 'YouTube',
                    'icon' => '', 
                    
                ],

                [ 
                    'platform' => 'Spotify',
                    'icon' => '', 
                    
                ],

                [ 
                    'platform' => 'Vimeo',
                    'icon' => '', 
                    
                ],

                [ 
                    'platform' => 'Deezer',
                    'icon' => '', 
                    
                ],

                [ 
                    'platform' => 'Tidal',
                    'icon' => '', 
                    
                ],

                [ 
                    'platform' => 'Apple Music',
                    'icon' => '', 
                    
                ],

                [ 
                    'platform' => 'Vevo',
                    'icon' => '', 
                    
                ],

                [ 
                    'platform' => 'Amazon',
                    'icon' => '', 
                    
                ],
                
            ]);
    }
}
