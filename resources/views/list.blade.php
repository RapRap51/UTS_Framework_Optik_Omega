@extends('app')

@section('content')
<div class="container mt-4">
    <div class="row mb-0">
        <div class="col-md-8">
            <h4 class="mb-3">{{ $pageTitle }}</h4>
        </div>
        <div class="col-6 col-md-4" align="right">
            <a href="{{ route('barang.create') }}" class="btn btn-success"><i class="bi bi-plus-square me-2"></i>Tambah</a>
        </div>
    </div>
    <hr>
    <div class="table-responsive border p-3 rounded-3">
        <table class="table table-bordered table-hover table-striped mb-0 bg-white">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Name Barang</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listbarangdb as $listbarang)
                    <tr>
                        <td>{{ $listbarang->kode_barang }}</td>
                        <td>{{ $listbarang->name_barang }}</td>
                        <td>{{ $listbarang->deskripsi }}</td>
                        <td>{{ $listbarang->harga }}</td>
                        <td>{{ $listbarang->stok }}</td>
                        <td>{{ $listbarang->satuan->name}}</td>
                        <td>@include('menu')</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
