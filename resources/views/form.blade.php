<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="{{ url('hasil') }}" method="POST">
    {{  csrf_field() }}
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label>
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="TTL" class="col-4 col-form-label">Tempat, Tanggal Lahir</label>
    <div class="col-8">
      <input id="TTL" name="TTL" placeholder="Masukkan TTL" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis kelamin" id="jenis kelamin_0" type="radio" class="custom-control-input" value="Laki-Laki"> 
        <label for="jenis kelamin_0" class="custom-control-label">L</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis kelamin" id="jenis kelamin_1" type="radio" class="custom-control-input" value="Perempuan"> 
        <label for="jenis kelamin_1" class="custom-control-label">P</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="hobi" class="col-4 col-form-label">Hobi</label>
    <div class="col-8">
      <input id="hobi" name="hobi" placeholder="Masukkan hobi" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
        <input type="submit" value="Prosess" class="btn btn-success"
    </div>
  </div>
</form>
