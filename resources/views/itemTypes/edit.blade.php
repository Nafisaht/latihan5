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
        <div class="col-2"></div>
        <div class="col-8">
            <h1>Form Edit Jenis</h1>
            <form action="{{route("types.update", $type -> id)}}" method="post">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$type->name}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi Barang</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$type->description}}">
        </div>
        <button class="btn btn-primary" type="submit">Ubah</button>
        </form>
        </div>
    </div> 
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>