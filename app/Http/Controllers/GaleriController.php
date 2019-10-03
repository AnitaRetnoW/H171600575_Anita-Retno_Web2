<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\Kategori_Galeri;

class GaleriController extends Controller
{
     public function index()
    {
        $galeri=galeri::all();
        
        return view('galeri.index',compact('galeri'));
    }
    public function show($id)
    {
    
    	$galeri=galeri::find($id);

    	return view(  'galeri.show',compact( 'galeri'));
    }

    public function create()
    {
    	$kategori_galeri=kategori_galeri::pluck('nama','id');
    	

    	return view( 'galeri.create',compact('kategori_galeri'));
    }
    public function store(Request $request)
    {
    	$input= $request->all();
    	
    	galeri::create($input);

    	return redirect(route('galeri.index'));
    }


}
