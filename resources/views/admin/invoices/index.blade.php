@extends('admin.layout')

@section('content')
    
    <!-- Main content -->
    <section class="content pt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="data-table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>nama_makanan</th>
                        <th>Porsi</th>
                        <th>harga</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($invoices as $invoice)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $invoice->nama_makanan }}</td>
                                <td>{{ $invoice->porsi}}</td>
                                <td>{{ $invoice->harga}}</td>
                                <td>
                                <div class="btn-group btn-group-sm">
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