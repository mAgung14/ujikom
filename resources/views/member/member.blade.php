@extends('sidebar.index')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@section('content')

<div class="ms-2" style="color:aliceblue;">
    <button class="btn btn-primary"><a href="{{ url('/member/add') }}">Tambah Data Member</a></button>
</div>
   {{-- <a href="{{ url('/mekanik/add') }}" class="btn btn-succes">Tambah Data Mekanik</a> --}}
   <a href="{{ url('/mekanik/add') }}" class="btn btn-success ms-2">Tambah Data Mekanik</i></a>

<section id="main-content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card" style="width: 70rem">
                <div class="card-title">
                    <h4>Table Basic </h4>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>No Hp</th>
                                    <th>Email</th>
                                    <th>Nik</th>
                                    <th>foto</th>
                                    <th>Ktp</th>
                                    <th>Alamat</th>
                                    <th>User</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                             <tbody>
                                @foreach ($member as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td><span class="badge badge-primary">{{ $item->no_hp }}</span></td>
                                    <td>{{ $item->email }}</td>
                                    <td class="color-primary">{{ $item->nik }}</td>
                                    <td><img src="/storage/{{ $item->foto }}" alt="" width="50" height="50"></td>
                                    <td><img src="/storage/{{ $item->ktp }} " alt="" width="50" height="50"></td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->user_id }}</td>
                                    <td><a href="{{ url('/member/update').'/'.$item->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                                    <td><a href="{{ url('/member/delete').'/'.$item->id }}" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a></td>
                                </tr>
                                @endforeach


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
