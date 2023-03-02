@extends('sidebar.index')
@section('content')

<div class="ms-2" style="color:aliceblue;">
    <button class="btn btn-primary m-2"><a href="{{ url('/mekanik/add') }}">Tambah Data</a></button>
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
                                    <th>Name</th>
                                    <th>Alamat</th>
                                    <th>Status Aktivasi</th>
                                    <th>Member</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                             <tbody>
                               @foreach ($mekanik as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->alamat }}<span class="badge badge-primary"></span></td>
                                    <td>{{ $item->status_aktivasi }}</td>
                                    <td>{{ $item->member_id }}</td>
                                    <td><a href="{{ url('/mekanik/update').'/'.$item->id }}">Edit</a></td>
                                    @endforeach
                                </tr>
                               
                                {{--
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Kolor Tea Shirt For Women</td>
                                    <td><span class="badge badge-success">Tax</span></td>
                                    <td>January 30</td>
                                    <td class="color-success">$55.32</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Blue Backpack For Baby</td>
                                    <td><span class="badge badge-danger">Extended</span></td>
                                    <td>January 25</td>
                                    <td class="color-danger">$14.85</td>
                                </tr>
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection