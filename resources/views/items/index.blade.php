@extends('layouts.app')
@push('style')
  @vite('public/assets/vendor/datatables/dataTables.bootstrap4.min.css')
@endpush
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Jenis</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Jenis</th>
                      <th>Nama</th>
                      <th>Jumlah</th>
                      <th>Harga</th>
                      <th>Total</th>
                      <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                  @foreach ($items as $no => $item)
                  <tr>
                    
                    <td>{{$no + 1}}</td>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->qty}}</td>
                    <td>@currency($item->price)</td>
                    <td>@currency($item->qty * $item->price)</td>
                    <td>
                      <a href="{{route("items.edit", $item -> id) }}" class="btn btn-warning">Ubah</a>
                      <form action="{{route("items.destroy", $item -> id) }}" method="post">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                    </td>
                 
                  </tr>

                  @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@push('script')
  @vite('public/assets/vendor/datatables/jquery.dataTables.min.js')
  @vite('public/assets/vendor/datatables/dataTables.bootstrap4.min.js')
  @vite('public/assets/js/demo/datatables-demo.js')
@endpush
