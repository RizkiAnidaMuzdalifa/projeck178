<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <br>
    @if (session('sukses'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{session('sukses')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
   <div class="container">
    <div class="row">
      <div class="col-6">
        <h1>Data Pegawai</h1>
      </div>
      <div class="col-6">
        
          <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
          Tambah Data
        </button>

      </div>
    </div>
      
<br>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nik</th>
      <th scope="col">Nama</th>
      <th scope="col">Agama</th>
      <th scope="col">No Hp</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_pegawai as $pegawai)
    <tr>
      <td>{{$pegawai -> nik}}</td>
      <td>{{$pegawai -> nama}}</td>
      <td>{{$pegawai -> agama}}</td>
      <td>{{$pegawai -> no_hp}}</td>
      <td>{{$pegawai -> alamat}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="/pegawai/create" method="POST">
  <div class="form-group">
    <label for="nik">Nik</label>
    <input type="text" class="form-control" id="nik" name="nik">
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="form-group">
    <label for="agama">Agama</label>
    <input type="text" class="form-control" id="agama" name="agama">
  </div>
  <div class="form-group">
    <label for="nope">No Hp</label>
    <input type="text" class="form-control" id="nope" name="nope">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea class="form-control" id="alamat" rows="3"></textarea>
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
  </body>
</html>