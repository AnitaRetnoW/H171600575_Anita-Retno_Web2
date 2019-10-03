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
    public function show($id)
    {
    
        $kategori_berita=kategori_berita::find($id);

        return view(  'kategori_berita.show',compact( 'kategori_berita'));
    }
    public function create()
    {

    	return view( 'kategori_berita.create');
    }
    public function store(Request $request)
    {
    	$input= $request->all();
    	Kategori_Berita::create($input);

    	return redirect(route('kategori_berita.index'));
    }
}
