<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $table = 'heroes'; // Nama tabel di database

    protected $fillable = [
        'category',
        'title',
        'description',
        'image',
        'button_text',
        'button_link'
    ];
}
