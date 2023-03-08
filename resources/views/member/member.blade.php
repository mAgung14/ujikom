@extends('sidebar')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@section('content')
<div class="col-lg-12 grid-margin stretch-card mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Member table</h4>
        <p class="card-description"><a href="{{ url('/member/add') }}" class="btn btn-primary">Tambah Data</a></p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>No Hp</th>
                <th>Email</th>
                <th>Nik</th>
                <th>foto</th>
                <th>Ktp</th>
                <th>Alamat</th>
                <th>User</th>
                <th colspan="2">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($member as $key => $item)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td class="py-1">{{ $item->name }}</td>
                    <td class="py-1"><span class="badge badge-primary">{{ $item->no_hp }}</span></td>
                    <td class="py-1">{{ $item->email }}</td>
                    <td class="color-primary">{{ $item->nik }}</td>
                    <td class="py-1"><img src="/storage/{{ $item->foto }}" alt="" width="50" height="50"></td>
                    <td class="py-1"><img src="/storage/{{ $item->ktp }} " alt="" width="50" height="50"></td>
                    <td class="py-1">{{ $item->alamat }}</td>
                    <td class="py-1">{{ $item->user->username }}</td>
                    <td class="py-1"><a href="{{ url('/member/update').'/'.$item->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                    <td class="py-1"><a href="{{ url('/member/delete').'/'.$item->id }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
