<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\Kategori_Pengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman=pengumuman::all();
        
        return view('pengumuman.index',compact('pengumuman'));
    }
    public function show($id)
    {
    
    	$pengumuman=pengumuman::find($id);

    	return view(  'pengumuman.show',compact( 'pengumuman'));
    }

    public function create()
    {
    	$kategori_pengumuman=kategori_pengumuman::pluck('nama','id');
    	

    	return view( 'pengumuman.create',compact('kategori_pengumuman'));
    }
    public function store(Request $request)
    {
    	$input= $request->all();
    	
    	pengumuman::create($input);

    	return redirect(route('pengumuman.index'));
    }


}
