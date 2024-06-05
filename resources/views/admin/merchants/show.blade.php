@extends('admin.layout')

@section('content')
<a class="btn btn-primary" href="{{ route('admin.merchants.index') }}"> Back</a>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Merchant</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.merchants.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Merchant:</strong>
                {{ $merchant->nama_katering }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                {{ $merchant->alamat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kontak:</strong>
                {{ $merchant->kontak }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                {{ $merchant->deskripsi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Logo:</strong>
                <img src="{{Storage::url($merchant->logo) }}" alt="Logo">
            </div>
        </div>
    </div>
@endsection