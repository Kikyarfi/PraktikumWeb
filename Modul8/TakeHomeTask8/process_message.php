<?php

class FormHandler {
    private $filePath = 'chat_log.txt';

    public function __construct() {
        // Buat file jika belum ada
        if (!file_exists($this->filePath)) {
            file_put_contents($this->filePath, '');
        }
    }

    public function saveMessage($email, $message) {
        $data = "Email: $email\nMessage: $message\n\n";
        file_put_contents($this->filePath, $data, FILE_APPEND);
    }

    public function displayResult() {
        echo "<div class='result'>";
        echo "<h3>Terima kasih atas masukannya!</h3>";
        echo "<p>Email: " . htmlspecialchars($_POST['email']) . "</p>";
        echo "<p>Message: " . htmlspecialchars($_POST['message']) . "</p>";
        echo "</div>";
    }
}

// Tangani formulir jika disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    $formHandler = new FormHandler();
    $formHandler->saveMessage($email, $message);
}

// Redirect kembali ke halaman contact.html
header("Location: contact.php");
exit();

?>
