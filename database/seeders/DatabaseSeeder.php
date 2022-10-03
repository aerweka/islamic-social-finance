<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password@123'),
            'nama_laznas' => '-',
            'alamat_laznas' => '-',
            'nama_direktur_laznas' => '-',
            'tingkatan_laznas' => '-',
            'no_telpon_laznas' => '-',
            'is_admin' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $this->call([
            dimention::class,
            aspect::class,
            question::class
        ]);
    }
}
