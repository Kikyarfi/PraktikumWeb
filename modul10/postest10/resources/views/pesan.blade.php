<!-- resources/views/pesan.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>
<body>        
    <h1>Isilah Form Data Penduduk Berikut!</h1>
    <form method="post" action="{{ route('submit-data') }}">
        @csrf
        <label for="nik">Nik:</label>
        <input type="text" id="nik" name="nik" required><br>

        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="provinsi">Provinsi:</label>
        <input type="text" id="provinsi" name="provinsi" required><br>

        <label for="kota">Kota:</label>
        <input type="text" id="kota" name="kota" required><br>

        <label for="notelp">No.Tlp:</label>
        <input type="text" id="notelp" name="notelp" required><br>

        <button type="submit">Submit Fom</button>
    </form>
</body>
</html>
