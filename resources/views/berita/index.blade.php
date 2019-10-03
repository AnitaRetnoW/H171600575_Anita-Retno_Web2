@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Berita</div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-danger">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">Kategori Berita Id</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $berita as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->kategori_berita_id !!}</td>


                        <td>
                        <a href ="{!! route('berita.show',[$item->id]) !!}" button class="btn btn-danger" type="button"> Hapus </button></a> 
                        <a href="{!! route('berita.show',[$item->id]) !!}" button class="btn btn-info" type="button"> Lihat </td></a>

            @endforeach
                        <a href ="{!! route('berita.create',[$item->id]) !!}" button class="btn btn-primary" type="button"> Tambah </button></td></a>
                        </tr>
                        
                    </tbody>
                </table>
        @endsection
                       