<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    use HasFactory;

    protected $table = 'datatamu';
    protected $fillable = [
        'nama',
        'tlp',
        'alamat',
        'keperluan',
        'email',
        'password',
        'updated_at',
        'created_at',
    ];

}
