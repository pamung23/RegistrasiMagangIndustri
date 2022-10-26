@extends('layouts.layout')
 
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Edit Perusahaan</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('perusahaan.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Maaf</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('perusahaan.update',$perusahaan->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Perusahaan</strong>
                <input type="text" name="nama_perusahaan" class="form-control" placeholder="Name" value="{{ $perusahaan->nama_perusahaan }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Perusahaan</strong>
                <input type="text" class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Alamat Perusahaan" value="{{ $perusahaan->alamat_perusahaan }}">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email</strong>
                    <input class="form-control" name="email" id="email" placeholder="Email" value="{{ $perusahaan->email }}">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>No. Contact Perusahaan</strong>
                        <input type="number" class="form-control" name="no_perusahaan" id="no_perusahaan" placeholder="No. Contact Perusahaan" value={{ $perusahaan->no_perusahaan }}>
                    </div>
                    <div class="form-group">
                        <strong>No. Contact Person</strong>
                        <input type="number" class="form-control" name="no_telpn_contact_person" id="no_telpn_contact_person" placeholder="Kelas" value="{{ $perusahaan->no_telpn_contact_person }}">
                    </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
   
</form>
@endsection