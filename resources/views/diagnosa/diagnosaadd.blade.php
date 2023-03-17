@extends('sidebar')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-title">
                </div>
                <div class="card-body">
                    <div class="basic-elements">
                        <form action="{{ url('/Diagnosa/add') }}" method="post">
                            @csrf
                            <div class="row">
                                    <div class="form-group">
                                        <label>Jenis kerusakan</label>
                                         <select class="js-example-basic-single select2-hidden-accessible" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true" name="id_jeniskerusakan">
                                                <option value="" selected disabled hidden>---Pilih---</option>
                                                @foreach ($jeniskerusakan as $item)
                                                    <option value="{{ $item->id }}">{{ $item->jenisKerusakan }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kerusakan</label>
                                        <select class="js-example-basic-single select2-hidden-accessible" style="width:100%" data-select2-id="1" tabindex="-1" aria-hidden="true" name="id_kerusakan">
                                            <option value="" selected disabled hidden>---Pilih---</option>
                                            @foreach ($kerusakan as $item)
                                                <option value="{{ $item->id }}">{{ $item->jnskendaraan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                        <input type="text" class="form-control" name="keterangan" value="">
                                    </div>
                                    <button class="btn btn-primary float-end">Simpan</button>
                                 </form>
                                   <a href="{{ url('/Diagnosa') }}" class="btn btn-danger float-end">Batal</a>
                                </div>
                            </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
