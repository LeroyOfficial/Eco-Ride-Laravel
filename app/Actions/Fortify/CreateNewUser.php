<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Carbon\Carbon;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user = User::create([
            'name' => $input['fname']." ".$input['lname'],
            'user_type' => 'Client',
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        $client = Client::create([
            'first_name' => $input['fname'],
            'last_name' => $input['lname'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'plan_type' => 'not yet',
            'sub_exp_day' => Carbon::now(),
            'status' => 'not yet',
        ]);

        return $user;
    }
}
