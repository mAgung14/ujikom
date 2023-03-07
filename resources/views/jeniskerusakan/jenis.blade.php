@extends('sidebar.index')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@section('content')
<div class="ms-2">
    <button class="btn btn-success m-2" style="color: white"><a href="{{ url('/jeniskerusakan/add') }}">Tambah Data</a></button>
</div>
<section id="main-content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card m-2" style="width: 50rem">
                <div class="card-title">
                    <h4>Table Basic </h4>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis</th>
                                    <th>deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                             <tbody>
                                @foreach ($jenis_kerusakan as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->jenisKerusakan }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td><a href="{{ url('/kerusakan/update').'/'.$item->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="{{ url('/kerusakan/delete').'/'.$item->id }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                                    @endforeach
                                </tr>
@endsection
