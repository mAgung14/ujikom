@extends('sidebar')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@section('content')
<div class="col-lg-12 grid-margin stretch-card mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Jenis Kerusakan</h4>
        <p class="card-description"><a href="{{ url('/jeniskerusakan/add') }}" class="btn btn-primary">Tambah data</a></p>
        <div class="table-responsive">
          <table class="table table-bordered">
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
                    <td><a href="{{ url('/jeniskerusakan/update').'/'.$item->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="{{ url('/jeniskerusakan/delete').'/'.$item->id }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                    @endforeach
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

