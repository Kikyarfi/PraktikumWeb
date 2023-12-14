<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_contact.css">
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
                <a href="index.php">Home</a>
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
                <a href="contact.php">Contact</a>
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
        <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
            $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

            $data = "Email: $email\nMessage: $message\n\n";
            file_put_contents('messages.txt', $data, FILE_APPEND);

            echo "<div class='result'>";
            echo "<h3>Terima kasih atas masukannya!</h3>";
            echo "<p>Email: $email</p>";
            echo "<p>Message: $message</p>";
            echo "</div>";
        }
        ?>
        <form action="contact.php" method="post">
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

