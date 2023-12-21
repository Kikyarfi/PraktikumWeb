<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>
<body>
    <h1>Berikut Hasil Data Anda!</h1>
    
    <p>Nik: {{ $data['nik'] }}</p>
    <p>Nama: {{ $data['name'] }}</p>
    <p>Provinsi: {{ $data['provinsi'] }}</p>
    <p>Kota: {{ $data['kota'] }}</p>
    <p>No.Tlp: {{ $data['notelp'] }}</p>

</body>
</html>
