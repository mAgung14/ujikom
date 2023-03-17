@extends('sidebar')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h3>Perbaikan</h3>
                <div class="col-6 grid-margin stretch-card" style="margin-top:50px;">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ $action }}" method="post" class="forms-sample">
                                @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Tanggal perbaikan</label>
                                <input type="date" name="tanggal" class="form-control" id="exampleInputName1" value="{{ $tanggal }}" placeholder="tanggal">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Status Perbaikan</label>
                                <select name="status_perbaikan" id="" class="form-control">
                                    <option value="pencarian" class="form-control">Pencarian</option>
                                    <option value="proses" class="form-control">Proses</option>
                                    <option value="selesai" class="form-control">Selesai</option>
                                </select>
                            </div>
                            @if (auth()->user()->level == 'admin')
                            <div class="form-group">
                                <label for="exampleInputName1">Status Pembayar</label>
                                <select name="status_pembayaran" id="" class="form-control">
                                    <option value="" class="form-control">-- Pilih --</option>
                                    <option value="sudah" class="form-control">Sudah Bayar</option>
                                    <option value="belum" class="form-control">Belum Bayar</option>
                                </select>
                            </div>
                            @endif
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-dark"><a href="/perbaikan">Cancel</a></button>
                        </form>
                        </div>
                    </div>
                    </div>
                    {{-- @endsection --}}

                    @endsection
