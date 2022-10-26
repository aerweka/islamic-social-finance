<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nama_laznas',
        'alamat_jalan',
        'alamat_prov',
        'alamat_kabkot',
        'alamat_kec',
        'alamat_desa',
        'nama_direktur_laznas',
        'tingkatan_laznas',
        'no_telpon_laznas',
        'no_rekomendasi_pembuatan',
        'tgl_rekomendasi_pembuatan',
        'no_rekomendasi_perpanjangan',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function laznas()
    {
        return $this->hasMany(Laznas::class, 'id');
    }
}
