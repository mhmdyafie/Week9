<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Hasil Form Tugas</title>
</head>
<body>
    <br>
    <h1 style="text-align: center">Hasil Input</h1>
<ul>
   <li>Nama : {{ $data['nama'] }}</li>
   <li>Email : {{ $data['email'] }}</li>
   <li>Lokasi : {{ $data['lokasi'] }}</li>
   <li>Jenis Kelamin : {{ $data['jenis_kelamin'] }}</li>
   <li>Skill : {{ $data['skill'] }}</li>
</ul>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>   