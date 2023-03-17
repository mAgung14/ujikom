@extends('sidebar')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                    <h3>Input Member</h3>

                </div>
                <div class="card-body">
                    <div class="basic-elements">
                        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $name }}">
                                    </div>
                                    <div class="form-group">
                                        <label>No.Handphone</label>
                                        <input class="form-control" type="text" name="no_hp" value="{{ $no_hp }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input id="example-email" class="form-control" type="email" placeholder="Email" name="email" value="{{ $email }}">
                                    </div>
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input id="example-email" class="form-control" type="text" name="nik" value="{{ $nik }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label>Foto</label>
                                        <input class="form-control" type="file" name="foto" value="{{ $foto }}">
                                    </div>
                                    <div class="form-group">
                                        <label>ktp</label>
                                        <input class="form-control" type="file" name="ktp" value="{{ $ktp }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input class="form-control" type="text" name="alamat" value="{{ $alamat }}">
                                    </div>
                                    <div class="form-group">
                                        <label>userid</label>
                                        <select name="users_id" id="users_id" class="custom-select">
                                            <option value="" selected disabled hidden>---Pilih---</option>
                                            @foreach ($users as $item)
                                                <option value="{{ $item->id }}">{{ $item->username }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button class="btn btn-primary float-end">Simpan</button>
                                    <button class="btn btn-danger float-end"><a href="{{ url('/member') }}">Batal</a></button>
                                </div>
                            </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        @endsection

