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
            'alamat_jalan' => ['required', 'string', 'max:255'],
            'alamat_desa' => ['required', 'string', 'max:255'],
            'alamat_kabkot' => ['required', 'string', 'max:255'],
            'alamat_prov' => ['required', 'string', 'max:255'],
            'nama_direktur_laznas' => ['required', 'string', 'max:255'],
            'tingkatan_laznas' => ['required', 'string', 'max:255'],
            'no_telpon_laznas' => ['required', 'string', 'max:255'],
            'no_rekomendasi_pembuatan' => ['nullable', 'string', 'max:255'],
            'tgl_rekomendasi_pembuatan' => ['nullable', 'string', 'max:255'],
            'no_rekomendasi_perpanjangan' => ['nullable', 'string', 'max:255'],
            'email_verified_at' => now()
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'nama_laznas' => $input['nama_laznas'],
            'alamat_jalan' => $input['alamat_jalan'],
            'alamat_prov' => $input['alamat_prov'],
            'alamat_kabkot' => $input['alamat_kabkot'],
            'alamat_kec' => $input['alamat_kec'],
            'alamat_desa' => $input['alamat_desa'],
            'nama_direktur_laznas' => $input['nama_direktur_laznas'],
            'tingkatan_laznas' => $input['tingkatan_laznas'],
            'no_telpon_laznas' => $input['no_telpon_laznas'],
            'no_rekomendasi_pembuatan' => $input['no_rekomendasi_pembuatan'],
            'tgl_rekomendasi_pembuatan' => $input['tgl_rekomendasi_pembuatan'],
            'no_rekomendasi_perpanjangan' => $input['no_rekomendasi_perpanjangan'],
        ]);
    }
}
