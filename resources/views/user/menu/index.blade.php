@extends('user.layout')

@section('content')
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-5">
              <div class="intro">
                <h1><strong>Daftar makanan</strong></h1>
                <div class="custom-breadcrumbs">
                  <a href="/">Home</a> <span class="mx-2">/</span>
                  <strong>Daftar makanan</strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center">
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<span>{{ $message }}</span>
		</div>
	@endif
	</div>
      <div class="card text-center container-fluid">
        <div class="card-header">
        Merchant
        </div>
        <div class="card-body">
        @forelse($merchants as $merchant)
        <img width="80" src="{{ Storage::url($merchant->logo) }}" alt="">
          <h5 class="card-title">{{ $merchant->nama_katering }}</h5>
          <p class="card-text">{{ $merchant->deskripsi }}</p>
          <p class="card-text">{{ $merchant->alamat }}</p>
        </div>
        @empty
        <div class="card-footer text-body-secondary">
          kosong
        </div>
          @endforelse
      </div>
        <div class="row mt-4">
            <div class="container">
                <div class="col-md-6 col-lg-4 mb-4">
                    @forelse($menus as $menu)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url($menu->foto) }}" class="card-img-top img-fluid" alt="image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $menu->nama_makanan }}</h5>
                            <p class="card-text">{{ $menu->deskripsi }}</p>
                            <p class="card-text">{{ $menu->harga }}</p>
                            <a href="{{ route('user.invoice.create',  $menu)}}" class="btn btn-primary">pesan</a>
                        </div>
                        @empty
                        <p class="display-4 text-center mx-auto">Data yang anda cari kosong !</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
@endsection