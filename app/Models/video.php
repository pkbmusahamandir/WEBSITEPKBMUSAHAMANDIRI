<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos'; // pastikan nama tabel ini benar

    protected $fillable = [
        'judul',
        'url',
        'deskripsi',
    ];
}
