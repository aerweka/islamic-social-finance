<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_answer extends Model
{
    use HasFactory;

    protected $table = 'answer';
    protected $primaryKey = 'id_jawaban';
    protected $fillable = [
        'id',
        'jawaban_terpilih',
        'filled_at',
        'total_env',
        'total_gov',
        'total-soc',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
