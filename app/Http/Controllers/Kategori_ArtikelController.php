<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Artikel;

class Kategori_ArtikelController extends Controller
{

    public function index()
    {
        $kategori_artikel=kategori_artikel::all();
        
        return view('kategori_artikel.index',compact('kategori_artikel'));
    }

    public function show($id)
    {
    
    	$kategori_artikel=kategori_artikel::find($id);

    	return view(  'kategori_artikel.show',compact( 'kategori_artikel'));
    }

    public function create()
    {

    	return view( 'kategori_artikel.create');
    }
    public function store(Request $request)
    {
    	$input= $request->all();
    	Kategori_Artikel::create($input);

    	return redirect(route('kategori_artikel.index'));
    }
 }