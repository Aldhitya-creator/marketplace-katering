@extends('admin.layout')

@section('content')
    
    <!-- Main content -->
    <section class="content pt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Menu</h3>
                <a href="{{ route('admin.menus.create')}}" class="btn btn-success shadow-sm float-right"> <i class="fa fa-plus"></i> Tambah </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="data-table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama makanan</th>
                        <th>Deskripsi</th>
                        <th>Foto</th>
                        <th>Harga</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($menus as $menu)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $menu->nama_makanan }}</td>
                                <td>{{ $menu->deskripsi }}</td>
                                <td>
                                  <a target="_blank" href="{{ Storage::url($menu->foto) }}">
                                      <img width="80" src="{{ Storage::url($menu->foto) }}" alt="">
                                  </a>
                                </td>
                                <td>{{ $menu->harga}}</td>
                                <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.menus.edit', $menu) }}" class="btn btn-sm btn-outline-primary">
                                    <img width="40" height="40" src="https://img.icons8.com/clouds/40/edit.png" alt="edit"/>
                                    </a>
                                    <form onclick="return confirm('are you sure !')" action="{{ route('admin.menus.destroy', $menu) }}"
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