<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_Galeri extends Model
{
    protected $table ='kategori_berita';

    protected $fillable = ['nama', 'users_id'];
}
