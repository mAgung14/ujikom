@extends('sidebar')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h3>Jenis kerusakan</h3>

            </div>
            <div class="card-body">
                <div class="basic-elements">
                    <form action="{{ $action }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label>Jenis Kerusakan</label>
                                    <input type="text" class="form-control" name="jenisKerusakan" value="{{ $jenisKerusakan }}">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" id="" cols="40" rows="10">{{ $deskripsi }}</textarea>
                                </div>
                            </div>
                                <button class="btn btn-primary ">Simpan</button>
                                <button class="btn btn-danger "><a href="{{ url('/jeniskerusakan') }}">Batal</a></button>
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
