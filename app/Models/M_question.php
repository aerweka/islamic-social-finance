<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_question extends Model
{
    use HasFactory;
    protected $table = 'question';
    protected $primaryKey = 'id_pertanyaan';
    public $timestamps=false;
    protected $fillable =[
        'id_aspect',
        'kode_indikator',
        'soal',
        'pilihan_1',
        'pilihan_2',
        'pilihan_3',
        'pilihan_4',
        'pilihan_5',
        'bobot_pertanyaan'
    ];

    public function aspect(){
        return $this->hasMany(M_aspect::class, 'id_aspek');
    }
}
