<?php
if (! function_exists('releases')) {
    
    function releases($user) {

        $selected_user=$user; 

        DB::table('royalties')->where('username', $selected_user)->get();
        

    
    }
}


if (! function_exists('getUsers')) {
    
    function getUsers() {

     

        $users = DB::table('users')->get();
        return $users; 
    
    }
}




?>