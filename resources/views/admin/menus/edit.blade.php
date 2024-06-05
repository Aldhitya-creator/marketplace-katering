@extends('admin.layout')
   
@section('content')

    <!-- Main content -->
    <section class="content pt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Data</h3>
                <a href="{{ route('admin.menus.index')}}" class="btn btn-success shadow-sm float-right"> <i class="fa fa-arrow-left"></i> Kembali</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="{{ route('admin.menus.update', $menu) }}" enctype="multipart/form-data">
                    @csrf 
                    @method('put')
                    <div class="form-group row border-bottom pb-4">
                        <label for="nama_makanan" class="col-sm-2 col-form-label">Nama makanan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('nama_makanan') is-invalid @enderror" name="nama_makanan" value="{{ old('nama_makanan', $menu->nama_makanan) }}" id="nama_makanan">
                          @error('nama_makanan')
                              <div class="invalid-tooltip">
                                  {{ $message }}
                              </div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row border-bottom pb-4">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" cols="30" rows="6">{{ old('deskripsi', $menu->deskripsi) }}</textarea>
                            @error('deskripsi')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                           @enderror
                        </div>
                    </div>
                    <div class="form-group row border-bottom pb-4">
                        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                            @error('foto')
                                <div class="invalid-tooltip">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row border-bottom pb-4">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $menu->harga) }}" id="harga">
                          @error('harga')
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