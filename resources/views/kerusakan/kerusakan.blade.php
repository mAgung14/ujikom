

@extends('sidebar')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@section('content')
<div class="col-lg-12 grid-margin stretch-card mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Kerusakan     table</h4>
        <p class="card-description"><a href="{{ url('/kerusakan/add') }}" class="btn btn-primary">Tambah data</a></p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Jenis</th>
                <th>Tipe</th>
                <th>Tahun</th>
                <th>Foto Kendaraan</th>
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
                    <td>{{ $item->member->name }}</td>
                    <td><a href="{{ url('/kerusakan/update').'/'.$item->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="{{ url('/kerusakan/delete').'/'.$item->id }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                    @endforeach
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

