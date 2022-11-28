<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;
    protected $table = "Alternatif";
    protected $fillable = [
        'kode_alternatif','nama_alternatif',
        'rarity','role','weapon','element',
        'detail','image_char','w1','w2','w3','w4',];
}
