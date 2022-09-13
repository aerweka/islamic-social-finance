<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dimention extends Model
{
    use HasFactory;

    protected $table = 'dimention';
    protected $primaryKey = 'id_dimensi';
    protected $fillable=[
        'dimensi',
        'bobot_dimensi'
    ];

    public function aspect(){
        return $this->hasMany(aspect::class, 'id_dimensi');
    }
}
