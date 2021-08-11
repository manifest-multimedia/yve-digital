<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(

            [

                [

                    'name' => 'Johnson Sebire',
                    'username' => 'johnsonsebire',
                    'password' => Hash::make('p@$$wordGH13'), 
                    'account_status'=>'new', 
                    'user_role'=>'admin', 
                    'email'=> 'johnson@manifestghana.com',
                    
                ], 

                [

                    'name' => 'java',
                    'username' => 'java',
                    'password' => Hash::make('a'), 
                    'account_status'=>'old', 
                    'user_role'=>'admin', 
                    'email'=> 'java@replacemail.com',
                    
                ], 

                [
                    'name' => 'kwamebaah',
                    'username' => 'kwamebaah',
                    'password' => Hash::make('adjoaattaa'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'kwamebaah@replacemail.com',
                ], 

                [
                    'name' => 'myAdmin', 
                    'username' => 'myAdmin',
                    'password' => Hash::make('my@123'), 
                    'account_status'=>'old', 
                    'user_role'=>'admin', 
                    'email' => 'myadmin@replacemail.com',
                ], 

                [
                    'name' => 'George Bows', 
                    'username' => 'GeorgeBows',
                    'password' => Hash::make('0240337887'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'georgebows@replacemail.com'
                    
                ],

                [
                    'name' => 'Dhamie', 
                    'username' => 'Dhamie',
                    'password' => Hash::make('teamrydinsolo'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'dhamie@replacemail.com'
                ], 

                [
                    'name' => 'hypegh', 
                    'username' => 'hypegh',
                    'password' => Hash::make('zulugh'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'hypegh@replacemail.com'
                ], 

                [
                    'name' => 'TuffourFrank', 
                    'username' => 'TuffourFrank',
                    'password' => Hash::make('tf5775jc'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'tuffourfrank@replacemail.com'
                    
                ], 

                [
                    'name' => 'KuamiUfresh', 
                    'username' => 'KuamiUfresh',
                    'password' => Hash::make('newmanteyeo6'), 
                    'account_status'=>'old', 
                    'user_role'=>'user',
                    'email' => 'kuamiufresh@replacemail.com' 
                    
                ], 

                [
                    'name' => '@Kuamiufresh', 
                    'username' => '@kuamiufresh',
                    'password' => Hash::make('0249952019teye'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => '@kuamiufresh@replacemail.com'
                    
                ], 

                [
                    'name' => 'ADONIY', 
                    'username' => 'ADONIY',
                    'password' => Hash::make('Ozymandiah@1'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' =>'adoniy@replacemail.com'
                ], 

                [
                    'name' => 'DBlack', 
                    'username' => 'DBlack',
                    'password' => Hash::make('blackavenuemuzik'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'dblack@replacemail.com'
                ], 

                [
                    'name' => 'Stepper', 
                    'username' => 'Stepper',
                    'password' => Hash::make('lion1995'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'stepper@replacemail.com'
                    
                ],

                [
                    'name' => 'SCRATCHMUSIC', 
                    'username' => 'SCRATCHMUSIC',
                    'password' => Hash::make('Stephen1'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'scratchmusic@replacemail.com'
                    
                ], 

                [
                    'name' => 'Phrimpong', 
                    'username' => 'Phrimpong',
                    'password' => Hash::make('wanyaLN'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'phrimpong@replacemail.com'
                    
                ], 

                [
                    'name' => 'Adiruler', 
                    'username' => 'Adiruler',
                    'password' => Hash::make('Rulenationz'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'adiruler@replacemail.com'  
                ], 

                [
                    'name' => 'BURZY', 
                    'username' => 'BURZY',
                    'password' => Hash::make('VIMCITYMUSICG1'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'burzy@replacemail.com'
                ], 

                [
                    'name' => 'RichmondBoateng', 
                    'username' => 'RichmondBoateng',
                    'password' => Hash::make('hosbbic'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'richmondboateng@replacemail.com'
                    
                ], 

                [
                    'name' => 'KOBBYSILENCE', 
                    'username' => 'KOBBYSILENCE',
                    'password' => Hash::make('200GHana'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'kobbysilence@replacemail.com'
                    
                ], 

                [
                    'name' => 'deep5623', 
                    'username' => 'deep5623',
                    'password' => Hash::make('Long0987'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'deep5623@replacemail.com'
                ], 

                [
                    'name' => 'TYMA', 
                    'username' => 'TYMA',
                    'password' => Hash::make('tymamusic1'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'tyma@replacemail.coms'
                    
                ], 

                [
                    'name' => 'FaliFinest', 
                    'username' => 'FaliFinest',
                    'password' => Hash::make('1Falifinest'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'falifinest@replacemail.com'
                    
                ], 

                [
                    'name' => 'Loaded47', 
                    'username' => 'Loaded47',
                    'password' => Hash::make('kingsley47'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'loaded47@replacemail.com'
                    
                ], 

                [
                    'name' => 'FRIMPONG', 
                    'username' => 'FRIMPONG',
                    'password' => Hash::make('amekugee'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'frimpong@replacemail.com'
                    
                ], 

                [
                    'name' => 'KwameBaahGH', 
                    'username' => 'KwameBaahGH',
                    'password' => Hash::make('adjoaataa'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'kwamebaahgh@replacemail.com'
                ], 

                [
                    'name' => 'chilmore', 
                    'username' => 'chilmore',
                    'password' => Hash::make('Ruvarashe3'), 
                    'account_status'=>'old', 
                    'user_role'=>'user', 
                    'email' => 'chilmore@replacemail.com'
                ]
    
    
            ]
            
            



            );
    }
}
