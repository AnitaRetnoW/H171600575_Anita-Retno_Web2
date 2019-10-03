@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Artikel</div>
                <div class="card-body">
         
                <table class="table table-bordered">
                    <thead class="bg-danger">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $kategori_artikel as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>

                        <a href ="{!! route('kategori_artikel.show',[$item->id]) !!}" button class="btn btn-danger" type="button"> Hapus </button></a> 
                        <a href="{!! route('kategori_artikel.show',[$item->id]) !!}" button class="btn btn-info" type="button"> Lihat </td></a>

            @endforeach
                        <a href ="{!! route('kategori_artikel.create',[$item->id]) !!}" button class="btn btn-primary" type="button"> Tambah </button></td></a>
                        </tr>
                        
                    </tbody>
                </table>
		@endsection