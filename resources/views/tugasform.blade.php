<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="{{ url('tugashasil') }}" method="POST">
    {{ csrf_field() }}
<h1 style="text-align: center">Form Tugas</h1>
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama</label>
      <div class="col-8">
        <input id="nama" name="nama" placeholder="Masukan Nama Anda" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-4 col-form-label">Email</label>
      <div class="col-8">
        <input id="email" name="email" placeholder="Masukan Email Anda" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="lokasi" class="col-4 col-form-label">Lokasi</label>
      <div class="col-8">
        <select id="lokasi" name="lokasi" class="custom-select">
          <option value="Jakarta">Jakarta</option>
          <option value="Depok">Depok</option>
          <option value="Bogor">Bogor</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Jenis Kelamin</label>
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
              <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="laki-laki">
              <label for="jenis_kelamin_0" class="custom-control-label">Laki-laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="perempuan">
          <label for="jenis_kelamin_1" class="custom-control-label">Perempuan</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Skill</label>
      <div class="col-8">
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="skill" id="skill_0" type="checkbox" class="custom-control-input" value="html">
          <label for="skill_0" class="custom-control-label">HTML</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="skill" id="skill_1" type="checkbox" class="custom-control-input" value="css">
          <label for="skill_1" class="custom-control-label">CSS</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="skill" id="skill_2" type="checkbox" class="custom-control-input" value="phyton">
          <label for="skill_2" class="custom-control-label">Phyton</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="skill" id="skill_3" type="checkbox" class="custom-control-input" value="PHP">
          <label for="skill_3" class="custom-control-label">PHP</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="skill" id="skill_4" type="checkbox" class="custom-control-input" value="javascript">
          <label for="skill_4" class="custom-control-label">Javascript</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="skill" id="skill_5" type="checkbox" class="custom-control-input" value="laravel">
          <label for="skill_5" class="custom-control-label">Laravel</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
          <input name="skill" id="skill_6" type="checkbox" class="custom-control-input" value="mysql">
          <label for="skill_6" class="custom-control-label">MySQL</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
</form>
<hr>