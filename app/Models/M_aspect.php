<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_aspect extends Model
{
    use HasFactory;

    protected $table = 'aspect';
    protected $primaryKey = 'id_aspek';
    public $timestamps = false;
    protected $fillable = [
        'kode',
        'aspek',
        'id_dimensi',
        'bobot_aspek'
    ];

    public function dimention()
    {
        return $this->belongsTo(dimention::class, 'id_dimensi');
    }

    public function question()
    {
        return $this->hasMany(question::class, 'id_aspek');
    }
}
