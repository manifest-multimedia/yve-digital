<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Royalties; 
use App\Models\Song; 
use App\Models\Release; 

use Haruncpi\LaravelIdGenerator\IdGenerator;


class UserIdUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $query=User::where('user_id', '')->orWhere('user_id', null)->get();

        foreach ($query as $item) {

            // Generate ID
            $user_id=IdGenerator::generate(['table' => 'users', 'field'=>'user_id', 'length' => 15, 'prefix' => 'usr_'.date('y').'_']);
            //Select & Update User
            $user=$item->id;
            $username=$item->username;
            $update_user=User::where('id',$user)->update(['user_id'=>$user_id]); 
            $update_royalties=Royalties::where('username',$username)->update(['user_id'=>$user_id]); 
            $update_songs=Song::where('username',$username)->update(['user_id'=>$user_id]); 
            $update_releases=Song::where('username',$username)->update(['user_id'=>$user_id]); 

        }
    }
}