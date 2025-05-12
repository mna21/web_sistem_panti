<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image']; // Sesuaikan dengan kolom yang ada

    public function items() // Jika ada relasi ke tabel lain
    {
        return $this->hasMany(HomeSectionItem::class, 'home_section_id');
    }
}
