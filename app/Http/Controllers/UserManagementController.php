<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;




class UserManagementController extends Controller
{
    //
    public function index() {
        return view('users'); 
    }

    public function edit($id){

        $user=User::where('id', $id)->firstOrfail(); 

        return view('users.edit', compact('user')); 


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

    public function store(Request $request) {
        $message="Record Stored Successfully!"; 
        
        $request_type=$request->request_type; 

        if($request_type=='Update') {
            
            $message='Changes Successfully Saved.';
        }

        $rules=array(
            'name'  => 'required', 
            'email' => 'required | email', 
            'account_status' => 'required', 
        ); 


        $validator=Validator::make([
            'name' => $request->name,
            'email' => $request->email, 
            'account_status'=>$request->account_status,
        ]  
        
        , $rules);

        if($validator->fails()) {
            return redirect()->route('users.index')
            ->withErrors($validator);  
        }

        else{

            switch ($request->password) {
                case null:
                    User::where('id', $request->id)
                    ->update([
                    'account_status' => $request->account_status, 
                    'username'=>$request->username,  
                    'name'=>$request->name, 
                    'email' =>$request->email, 
                    'user_role'=>$request->user_role, 
                    ]);
        
                    return redirect()->route('users.index')
                    ->with('success', $message);
                    break;
                
                default:
                User::where('id', $request->id)
                ->update([
                'account_status' => $request->account_status, 
                'username'=>$request->username, 
                'password'=>Hash::make($request->password), 
                'name'=>$request->name, 
                'email' =>$request->email, 
                'user_role'=>$request->user_role, 
                ]);
    
                return redirect()->route('users.index')
                ->with('success', $message);
                    break;
            }

           
        }
        
   
    }

    public function destroy($id) {
        return 'Brrrrrr... I\'m a gonna'; 
    }

}
