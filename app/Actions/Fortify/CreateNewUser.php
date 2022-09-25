<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

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
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'nama_laznas' => ['required', 'string', 'max:255'],
            'alamat_laznas' => ['required', 'string', 'max:255'],
            'nama_direktur_laznas' => ['required', 'string', 'max:255'],
            'tingkatan_laznas' => ['required', 'string', 'max:255'],
            'no_telpon_laznas' => ['required', 'string', 'max:255'],
            'is_admin' => ['required']
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'nama_laznas' => $input['nama_laznas'],
            'alamat_laznas' => $input['alamat_laznas'],
            'nama_direktur_laznas' => $input['nama_direktur_laznas'],
            'tingkatan_laznas' => $input['tingkatan_laznas'],
            'no_telpon_laznas' => $input['no_telpon_laznas'],
            'is_admin' => $input['is_admin'] ? $input['is_admin'] : 0,
        ]);
    }
}
