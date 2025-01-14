<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['judul', 'kategori_id', 'penulis'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
