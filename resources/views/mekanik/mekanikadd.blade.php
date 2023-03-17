@extends('sidebar')
@section('content')


<div class="row">
    <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                    <h3>Input mekanik</h3>

                </div>
                <div class="card-body">
                    <div class="basic-elements">
                        <form action="{{ $action }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $name }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input class="form-control" type="text" name="alamat" value="{{ $alamat }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Member</label>
                                        <select class="form-select" name="member_id" aria-label="Default select example">
                                            <option selected>---Pilih---</option>
                                            @foreach ($member as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary ">Simpan</button>
                                    <button class="btn btn-danger "><a href="{{ url('/mekanik') }}">Batal</a></button>
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
