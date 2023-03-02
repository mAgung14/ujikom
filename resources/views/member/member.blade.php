@extends('sidebar.index')
@section('content')

<div class="ms-2" style="color:aliceblue;">
    <button class="btn btn-primary"><a href="{{ url('/member/add') }}">Tambah Data Member</a></button>
</div>
<div class="ms-2" style="color:aliceblue;">
    <button class="btn btn-primary"><a href="{{ url('/mekanik/add') }}">Tambah Data Mekanik</a></button>
</div>
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
                                    <td>{{ $item->foto }}</td>
                                    <td>{{ $item->ktp }} </td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->user }}</td>
                                    <td><a href="{{ url('/member/update').'/'.$item->id_member }}">Edit</a></td>
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
