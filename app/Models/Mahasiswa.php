<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'npm',
        'nidn',
        'nama'
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'nidn');
    }
}