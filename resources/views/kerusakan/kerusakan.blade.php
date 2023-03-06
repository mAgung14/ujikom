@extends('sidebar.index')
@section('content')
<div class="ms-2">
    <button class="btn btn-success m-2" style="color: white"><a href="{{ url('/kerusakan/add') }}">Tambah Data</a></button>
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
                                    <th>#</th>
                                    <th>Jenis</th>
                                    <th>Tipe</th>
                                    <th>Tahun</th>
                                    <th>foto</th>
                                    <th>Member</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                             <tbody>
                                @foreach ($kerusakan as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->jnskendaraan }}</td>
                                    <td>{{ $item->tipe_kendaraan }}<span class="badge badge-primary"></span></td>
                                    <td>{{ $item->tahunkendaraan }}</td>
                                    <td><img src="/storage/{{ $item->foto_kendaraan }}" alt="" width="50" height="50"></td>
                                    <td>{{ $item->id_member }}</td>
                                    <td><a href="{{ url('/mekanik/update').'/'.$item->id }}">Edit</a></td>
                                    @endforeach
                                </tr>
@endsection
