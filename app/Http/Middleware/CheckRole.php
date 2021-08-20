<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        /* 
        * Perform All Login Checks Here
        * Check if User is Accoutnt Status is Old or New
        * Check if USer is Admin or Regular User
        * Redirect User to Complete Account Update if Old Account
        * Redirect User to Admin Dashboard if User is Admin
        * Redirect User to Customer Dashboard if Regular User.
        * 
        */
        
//$account_type=Auth::user()->account_type; 

    try {
        
        if(Auth::check()) {

            $account_status=Auth::user()->account_status; 
            $user_role=Auth::user()->user_role; 
            

            $dashboard=""; 

            switch ($user_role){
                case 'admin': 
                    $dashboard="admin";
                    break; 
                case 'user':
                    $dashboard="user"; 
                    break;

                    default: 
                    $dashboard ="user";
            };

           
            
           if ($account_status!='new') {
               return redirect()->route('profile'); 
           }
           else {

            return redirect()->route($dashboard);

           }

             
        }
    }
    
    catch (exception $e) {
        return $e->getmessage(); 
    }
        

        return $next($request); 

        //return $next($request, compact('account_type'));
    }
}
