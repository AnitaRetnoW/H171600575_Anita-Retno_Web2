<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Berita;
class Kategori_BeritaController extends Controller
{
    
    public function index()
    {
        $kategori_berita=kategori_berita::all();
        
        return view('kategori_berita.index',compact('kategori_berita'));
    }
}
