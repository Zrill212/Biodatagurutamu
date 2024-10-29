<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata Saya</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: red;
      color: blue;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      background-color: white;
      padding: 20px 40px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 400px;
      width: 100%;
    }
    h1 {
      color: black;
      margin-bottom: 20px;
      font-size: 2em;
    }
    h2 {
      color: black;
      margin: 10px 0;
      font-weight: normal;
      font-size: 1.2em;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Biodata Saya</h1>
    <h2>Nama Saya: {{ $nama }}</h2>
    <h2>Kelas Saya: {{ $kelas }}</h2>
    <h2>Sekolah Saya: {{ $sekolah }}</h2>
    <h2>Alamat Saya: {{ $alamat }}</h2>
    <h2>Hobi Saya: {{ $hoby }}</h2>
  </div>
</body>
</html>
