@extends('user.layout')

@section('content')

  
 <!-- Main content -->
 <section class="content pt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Silahkan Order</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="post" action="{{ route('user.invoice.store') }}" enctype="multipart/form-data">
                    @csrf 
                    @forelse($menus as $menu)
                    @empty
                        <p class="display-4 text-center mx-auto">Data yang anda cari kosong !</p>
                        @endforelse
                    <div class="form-group row border-bottom pb-4">
                        <label for="makanan_id" class="col-sm-2 col-form-label">Nama Makanan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('nama_makanan') is-invalid @enderror " name="nama_makanan" value="{{ old('nama_makanan', $menu->nama_makanan) }}" id="nama_makanan" disabled>
                        </div>
                    </div>
                    <div class="form-group row border-bottom pb-4">
                      <label for="porsi" class="col-sm-2 col-form-label">Jumlah Porsi<span class="text-danger">*</span></label></label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control @error('porsi') is-invalid @enderror" name="porsi" value="{{ old('porsi') }}" id="porsi">
                        @error('porsi')
                        <div class="invalid-tooltip">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row border-bottom pb-4">
                        <label for="harga_id" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                               
                                <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $menu->harga) }}" id="harga" disabled>
                                
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
@endsection