
@extends('sidebar')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@section('content')
<div class="col-lg-12 grid-margin stretch-card mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Mekanik table</h4>
        <p class="card-description"><a href="{{ url('/Diagnosa/add') }}" class="btn btn-primary">Tambah data</a></p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr class="text-center">
                <th>No</th>
                <th>Jenis kendaraan</th>
                <th>Jenis Kerusakan</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                {{-- @dd($diagnosakerusakan) --}}
                @foreach ($diagnosakerusakan as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->kerusakan->jnskendaraan }}</td>
                    <td>{{ $item->jenis->jenisKerusakan }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td><a href="{{ url('/jeniskerusakan/update').'/'.$item->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="{{ url('/jeniskerusakan/delete').'/'.$item->id }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div


@endsection
