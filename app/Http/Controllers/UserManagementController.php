<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class UserManagementController extends Controller
{
    //
    public function index() {
        return view('users'); 
    }

    public function edit($id){
        return 'Edited ' . $id; 
    }

    public function update(Request $request, $id){

        $user_id=$id; 

        $user_role=$request->role;
        $account_status=$request->status;

        $update_role=null; 
        $update_status=null; 


        switch ($user_role) {
            case 'admin':
                
                $update_role='admin'; 

                break;
            
            default:
                $update_role='user'; 
                break;
        }

        switch ($account_status) {
            case 'old':
                $update_status='verified'; 
                break;
            
            default:
                $update_status='verified'; 
                break;
        }
        
        
        
        User::where('id', $user_id)
        ->update([
            'account_status' => $update_status,
            'user_role' => $update_role

        ]); 

        return redirect()->route('users.index')
        ->with('success', 'Account Successfully Activated.'); 

    }

    public function show($id){
        return 'Showing ' . $id; 
    }

    public function store($id) {
        return 'Yeppy, I\'m stored up'; 
    }

    public function destroy($id) {
        return 'Brrrrrr... I\'m a gonna'; 
    }

}
