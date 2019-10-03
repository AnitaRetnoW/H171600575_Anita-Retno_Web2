<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori_Pengumuman;

class Kategori_PengumumanController extends Controller
{
     public function index()
    {
        $kategori_pengumuman=kategori_pengumuman::all();
        
        return view('kategori_pengumuman.index',compact('kategori_pengumuman'));
    }
     public function show($id)
    {
    
    	$kategori_pengumuman=kategori_pengumuman::find($id);

    	return view(  'kategori_pengumuman.show',compact( 'kategori_pengumuman'));
    }

    public function create()
    {

    	return view( 'kategori_pengumuman.create');
    }
    public function store(Request $request)
    {
    	$input= $request->all();
    	Kategori_Pengumuman::create($input);

    	return redirect(route('kategori_pengumuman.index'));
    }

}
