@extends('admin.layout')
  
@section('content')
   
   
 <!-- Main content -->
 <section class="content pt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
                <a href="{{ route('admin.merchants.index')}}" class="btn btn-success shadow-sm float-right"> <i class="fa fa-arrow-left"></i> Kembali</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="{{ route('admin.merchants.store') }}" enctype="multipart/form-data">
                    @csrf 
                    <div class="form-group row border-bottom pb-4">
                        <label for="nama_katering" class="col-sm-2 col-form-label">Nama Katering<span class="text-danger">*</span></label></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('nama_katering') is-invalid @enderror" name="nama_katering" value="{{ old('nama_katering') }}" id="nama_katering">
                          @error('nama_katering')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row border-bottom pb-4">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat<span class="text-danger">*</span></label></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" id="alamat">
                          @error('alamat')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row border-bottom pb-4">
                        <label for="kontak" class="col-sm-2 col-form-label">Kontak<span class="text-danger">*</span></label></label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('kontak') is-invalid @enderror" name="kontak" value="{{ old('kontak') }}" id="kontak">
                          @error('kontak')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row border-bottom pb-4">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi<span class="text-danger">*</span></label></label>
                        <div class="col-sm-10">
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" cols="30" rows="6">{{ old('deskripsi') }}</textarea>
                          @error('deskripsi')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row border-bottom pb-4">
                        <label for="logo" class="col-sm-2 col-form-label">Gambar logo<span class="text-danger"></span></label></label>
                        <div class="col-sm-10">
                            <input type="file" name="logo" class="form-control @error('logo') is-invalid @enderror">
                            <small class="form-text text-muted">Pilih file logo jika ada.</small>
                            @error('logo')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection