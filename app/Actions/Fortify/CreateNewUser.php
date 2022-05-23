<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        // AutoGenerate School ID

        $user_id=IdGenerator::generate(['table' => 'users', 'field'=>'user_id', 'length' => 15, 'prefix' => 'usr_'.date('y').'_']);
       
        
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'user_id' =>$user_id,
            'password' => Hash::make($input['password']),
            
        ]);
    }
}
