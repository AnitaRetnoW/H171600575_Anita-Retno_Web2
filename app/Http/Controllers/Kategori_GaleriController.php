<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Galeri;

class Kategori_GaleriController extends Controller
{
     public function index()
    {
        $kategori_galeri=kategori_galeri::all();
        
        return view('kategori_galeri.index',compact('kategori_galeri'));
    }
     public function show($id)
    {
    
    	$kategori_galeri=kategori_galeri::find($id);

    	return view(  'kategori_galeri.show',compact( 'kategori_galeri'));
    }

    public function create()
    {

    	return view( 'kategori_galeri.create');
    }
    public function store(Request $request)
    {
    	$input= $request->all();
    	Kategori_Galeri::create($input);

    	return redirect(route('kategori_galeri.index'));
    }
}
