<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laznas extends Model
{
    use HasFactory;
    protected $primaryKey = "laznas";

    protected $fillable = [
        'user_id',
        'nama',
        'alamat',
        'nama_direktur',
        'tingkatan',
        'no_telpon'
    ];

    public function user()
    {
        return $this->belongsTo(users::class, 'id');
    }
}
