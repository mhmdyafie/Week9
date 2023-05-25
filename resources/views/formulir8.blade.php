<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pemeriksaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <form>
        <div class="form-group row">
          <label for="name" class="col-4 col-form-label">Nama</label>
          <div class="col-8">
            <input id="name" name="name" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="tanggal_pemeriksaan" class="col-4 col-form-label">Tanggal Periksa</label>
          <div class="col-8">
            <input id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="tanggal_lahir_usia" class="col-4 col-form-label">Tanggal lahir/Usia</label>
          <div class="col-8">
            <input id="tanggal_lahir_usia" name="tanggal_lahir_usia" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="jenis_kelamin" class="col-4 col-form-label">Jenis Kelamin</label>
          <div class="col-8">
            <select id="jenis_kelamin" name="jenis_kelamin" class="custom-select">
              <option value="laki-laki">Laki-Laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
      <br>
      <hr>
      <br>
      <table class="table">
        <thead class="table-dark">
          <tr>
              <th>Jenis Tes</th>
              <th>Hasil Pemeriksaan</th>
              <th>Normal</th>
          </tr>
          <tr>
              <td>Tekanan Darah</td>
              <td>110/80</td>
              <td>120/80 mmhg</td>
          </tr>
          <tr>
              <td>Asam Urat</td>
              <td>130</td>
              <td>7 mg</td>
          </tr>
          <tr>
              <td>Kolesterol Total</td>
              <td>190</td>
              <td>200 mg/dl</td>
          </tr>
          <tr>
              <td>Gula Darah</td>
              <td>90</td>
              <td>Puasa : 70-110 mg/dl</td>
          </tr>
      </table>
</body>
</html>