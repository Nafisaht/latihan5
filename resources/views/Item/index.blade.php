<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventaris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
        <div class="col-2">
          <!-- <a href="/" class="btn btn-primary">Tabel Barang</a> -->
          <!-- <a href="/item-types" class="btn btn-secondary">Tabel Jenis Barang</a> -->
          
        </div>
        <div class="col-8">
            <a href="{{route("create") }}" class="btn btn-primary">Tambah Data</a>
            <h1>Tabel Data Inventaris</h1>
            <table class="table">
                <tr>
                    <th>No.</th>
                    <!-- <th>Jenis</th> -->
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Action</th>
                    <!-- <th>Total</th> -->
                </tr>
                @foreach($items as $no => $item)
                 <tr>
                    <td>{{$no + 1}}</td>
                    
                    <td>{{$item->name}}</td>
                    <td>{{$item->qty}}</td>
                    <td>@currency($item->price)</td>
                    
                    <td>
                      <a href="{{route("edit", $item -> id) }}" class="btn btn-warning">Ubah</a>
                      <form action="{{route("destroy", $item -> id) }}" method="post">
                          @csrf
                          @method("DELETE")
                          <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                    </td>
                 </tr>
                 @endforeach
            </table>
         
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
