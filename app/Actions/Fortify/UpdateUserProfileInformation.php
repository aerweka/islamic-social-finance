<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'nama_laznas' => ['required', 'string', 'max:255'],
            'alamat_laznas' => ['required', 'string', 'max:255'],
            'nama_direktur_laznas' => ['required', 'string', 'max:255'],
            'tingkatan_laznas' => ['required', 'string', 'max:255'],
            'no_telpon_laznas' => ['required', 'string', 'max:255'],
        ])->validateWithBag('updateProfileInformation');

        if (
            $input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail
        ) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'nama_laznas' => $input['nama_laznas'],
                'alamat_laznas' => $input['alamat_laznas'],
                'nama_direktur_laznas' => $input['nama_direktur_laznas'],
                'tingkatan_laznas' => $input['tingkatan_laznas'],
                'no_telpon_laznas' => $input['no_telpon_laznas'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
