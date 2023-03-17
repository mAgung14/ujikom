
@extends('sidebar')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@section('content')
<div class="col-lg-12 grid-margin stretch-card mt-5">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h4 class="card-title">perbaiakan table</h4>
        @if (auth()->user()->level == 'member')
        <p class="card-description"><a href="{{ url('/perbaikan/add') }}" class="btn btn-primary">Tambah data</a></p>
        @endif
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr class="text-center">
                <th>No</th>
                <th>Pelanggan</th>
                <th>Status Perbaikan</th>
                <th>Status Pembayaran</th>
                <th>Mekanik</th>
                <th>Kendaraan</th>
                <th>Jenis Kerusakan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
                {{-- @dd($diagnosakerusakan) --}}
                @foreach ($perbaikan as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->mekanik->member->name }}</td>
                    <td>{{ $item->status_perbaikan }}</td>
                    <td>{{ $item->status_pembayaran }}</td>
                    <td>{{ $item->mekanik->name}}</td>
                    <td>{{ $item->kerusakan->jnskendaraan }}</td>
                    <td>{{ $item->kerusakan->diagnos }}</td>
                    <td><a href="{{ url('/perbaikan/update').'/'.$item->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="{{ url('/perbaikan/delete').'/'.$item->id }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div


@endsection
