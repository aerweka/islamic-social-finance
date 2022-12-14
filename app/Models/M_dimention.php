<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_dimention extends Model
{
    use HasFactory;

    protected $table = 'dimention';
    protected $primaryKey = 'id_dimensi';
    public $timestamps=false;
    protected $fillable = [
        'dimensi',
        'bobot_dimensi'
    ];

    public function aspect()
    {
        return $this->hasMany(M_aspect::class, 'id_dimensi');
    }
}
