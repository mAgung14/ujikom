@extends('sidebar')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@section('content')
@if (auth()->user()->level == 'member')

    <div class="col-md-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex flex-row justify-content-between">
            <h4 class="card-title mb-1">Data Kamu</h4>
            <p><a href="{{ url('/member/update').'/'.auth()->user()->member->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></p>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="preview-list">
                <div class="preview-item border-bottom">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-primary">
                      <i class="mdi mdi-account"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-sm-flex flex-grow">
                    <div class="flex-grow">
                      <h6 class="preview-subject">Nama</h6>
                      <p class="text-muted mb-0">{{ auth()->user()->member->name }}</p>
                    </div>
                  </div>
                </div>
                <div class="preview-item border-bottom">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-email-open"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-sm-flex flex-grow">
                    <div class="flex-grow">
                      <h6 class="preview-subject">Email</h6>
                      <p class="text-muted mb-0">{{ auth()->user()->member->email }}</p>
                    </div>
                  </div>
                </div>
                <div class="preview-item border-bottom">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-drag"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-sm-flex flex-grow">
                    <div class="flex-grow">
                      <h6 class="preview-subject">No Handphone</h6>
                      <p class="text-muted mb-0">{{ auth()->user()->member->no_hp }}</p>
                    </div>
                  </div>
                </div>
                <div class="preview-item border-bottom">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-danger">
                      <i class="mdi mdi-google-maps"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-sm-flex flex-grow">
                    <div class="flex-grow">
                      <h6 class="preview-subject">Alamat</h6>
                      <p class="text-muted mb-0">{{ auth()->user()->member->alamat }}</p>
                    </div>
                  </div>
                </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @else
<div class="col-lg-12 grid-margin stretch-card mt-5">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Member table</h4>
        <p class="card-description"><a href="{{ url('/member/add') }}" class="btn btn-primary">Tambah Data</a></p>
        <div class="table-responsive">
          <table id="tabel-data" class="table table-bordered" width="100%" cellspacing="0">
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
                    <td class="py-1"><a href="{{ url('/member/delete').'/'.$item->id.'/'.$item->users_id }}" class="btn btn-danger" onclick="myFunction()"><i class="bi bi-trash-fill"></i></a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script>
    function myFunction() {
  var txt;
  if (confirm("Press a button!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
$(document).ready(function(){
        $('#tabel-data').DataTable();
    });
  </script>
@endif

@endsection
