<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

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
            'login' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();
        
        $prop = false;
        if($input['owner'] != null && strcmp($input['owner'], 'Yes') == 0){
            $prop = true;
        }

        return User::create([
            'name' => $input['name'],
            'prenom' => $input['prenom'],
            'login' => $input['login'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'genre' => $input['genre'],
            'dateDeNaissance' => $input['birth'],
            'telephone' => (int) $input['tel'],
            'proprietaire' => $prop
        ]);
    }
}
