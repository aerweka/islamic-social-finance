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
            'alamat_jalan' => '-',
            'alamat_prov' => '-',
            'alamat_kabkot' => '-',
            'alamat_kec' => '-',
            'alamat_desa' => '-',
            'nama_direktur_laznas' => '-',
            'tingkatan_laznas' => '-',
            'no_telpon_laznas' => '-',
            'is_admin' => true,
            'no_rekomendasi_pembuatan' => '123456',
            'tgl_rekomendasi_pembuatan' => now(),
            'no_rekomendasi_perpanjangan' => '123456',
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
