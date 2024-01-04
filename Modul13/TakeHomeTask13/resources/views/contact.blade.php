<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('style_contact.css') }}" rel="stylesheet">

</head>
<body>
    <nav>
        <div class="logo">
            <img src="logo1.png" alt="Logo"></a>
        </div>
        <h1>
            KOPYI.IN
        </h1>
        <ul>
            <li><!-- Halaman Awal -->
                <a href="/">Home</a>
            </li>
            <li><!-- Pilihan Kopi dan Makanan -->
                <a href=" ">Coffee & Roastery</a>
            </li>
            <li><!-- Pesan Meja -->
                <a href=" ">Booking Table</a>
            </li>
            <li><!-- Foto Coffee -->
                <a href=" ">Image</a>
            </li>
            <li><!-- Jadwal Event -->
                <a href=" ">Events</a>
            </li>
            <li><!-- Kontak -->
                <a href="contact">Contact</a>
                <!-- Dropdown Menu -->
                <ul class="kontak">
                    <li><a href=" ">Instagram</a></li>
                    <li><a href=" ">WhatsApp</a></li>
                    <li><a href=" ">Email</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <section>
        <div class="tulisan2"><h2>Contact Person:</h2></div>
        <form action="/contact/send" method="post">
            @csrf
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" cols="30" rows="10" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </section>
    <footer>
        TERIMAKASIH
    </footer>

</body>
</html>

