@extends('layouts.layout')
 
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Add New Perusahaan</h2>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('perusahaan.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>maaf</strong> mohon isi data dengan benar<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('perusahaan.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Perusahaan</strong>
                <input type="text" name="nama_perusahaan" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Perusahaan</strong>
                <input class="form-control" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Alamat Perusahaan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No. Contact Perusahaan</strong>
                <input type="number" class="form-control" name="no_perusahaan" id="no_perusahaan" placeholder="No. Contact Perusahaan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No. Contact Person</strong>
                <input type="number" class="form-control" name="no_telpn_contact_person" id="no_telpn_contact_person" placeholder="No. Contact Person">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
   
</form>
@endsection