<?php

namespace App\Providers;

use App\Models\ConnectedAccount;
use App\Policies\ConnectedAccountPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Illuminate\Support\Facades\Gate;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        ConnectedAccount::class => ConnectedAccountPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Admin 
        Gate::define('isAdmin', function($user) {
            return $user->user_role=='admin'; 
        });

        //User
        Gate::define('isUser', function($user){
            return $user->user_role=="user"; 
        });
    }
}
