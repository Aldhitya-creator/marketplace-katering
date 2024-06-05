@extends('admin.layout')

@section('content')
    
    <!-- Main content -->
    <section class="content pt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Merchants</h3>
                <a href="{{ route('admin.merchants.create')}}" class="btn btn-success shadow-sm float-right"> <i class="fa fa-plus"></i> Tambah </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="data-table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama katering</th>
                        <th>Alamat</th>
                        <th>kontak</th>
                        <th>Deskripsi</th>
                        <th>Logo</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($merchants as $merchant)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $merchant->nama_katering }}</td>
                                <td>{{ $merchant->alamat }}</td>
                                <td>{{ $merchant->kontak }}</td>
                                <td>{{ $merchant->deskripsi }}</td>
                                <td>
                                  <a target="_blank" href="{{ Storage::url($merchant->logo) }}">
                                      <img width="80" src="{{ Storage::url($merchant->logo) }}" alt="">
                                  </a>
                                </td>
                                <td>
                                <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.merchants.show', $merchant) }}" class="btn btn-sm btn-outline-primary">
                                    <img width="40" height="40" src="https://img.icons8.com/clouds/40/show.png" alt="show"/>
                                    </a>
                                    <a href="{{ route('admin.merchants.edit', $merchant) }}" class="btn btn-sm btn-outline-primary">
                                    <img width="40" height="40" src="https://img.icons8.com/clouds/40/edit.png" alt="edit"/>
                                    </a>
                                    <form onclick="return confirm('are you sure !')" action="{{ route('admin.merchants.destroy', $merchant) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger" type="submit">
                                        <img width="40" height="40" src="https://img.icons8.com/clouds/40/trash.png" alt="trash"/>
                                    </form>
                                </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">Data Kosong !</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
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