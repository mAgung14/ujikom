@extends('sidebar')
@section('content')

<div class="row mx-2 mt-2">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
            </div>
            <div class="card-body">
                <div class="basic-elements">
                    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label>Jenis kendaraan</label>
                                        <select class="form-select" name="jnskendaraan" aria-label="Default select example">
                                            <option selected>---Pilih---</option>
                                            <option value="motor">Motor</option>
                                            <option value="mobil">Mobil</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Tipe Kendaraan</label>
                                        <input type="text" class="form-control" name="tipe_kendaraan" value="{{ $tipe_kendaraan }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Tahun Kendaraan</label>
                                        <input type="text" class="form-control" name="tahunkendaraan" value="{{ $tahunkendaraan }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Kendaraan</label>
                                        <input type="file" name="foto_kendaraan" id="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Member</label>
                                        <select class="form-select" name="member_id" aria-label="Default select example">
                                            <option >---Pilih---</option>
                                            <option value="{{ auth()->user()->member->id }}" selected>{{ auth()->user()->member->name }}</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary ">Simpan</button>
                                <button class="btn btn-danger "><a href="{{ url('/kerusakan') }}">Batal</a></button>
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
