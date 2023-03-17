
@extends('sidebar')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-title">
                <div class="col-6 grid-margin stretch-card" style="margin-top:50px;">
                    <div class="card">
                    <div class="card-body">
                        <form action="{{ url('/detail/peraikan') }}" method="post" class="forms-sample">
                            @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Jenis perbaikan</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Nominal</label>
                            <input type="text" name="nominal" class="form-control" id="exampleInputName1" placeholder="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="exampleInputName1" placeholder="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Perbaikan</label>
                            <select class="form-control" name="id_kerusakan" id="exampleSelectGender">
                                @foreach ($perbaikan as $item)
                                <option value="{{ $item->id }}">{{ $item->jnskendaraan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-dark"><a href="/perbaikan">Cancel</a></button>
                        </form>
                    </div>
                    </div>
                </div>
@endsection

{{-- @endsection --}}
