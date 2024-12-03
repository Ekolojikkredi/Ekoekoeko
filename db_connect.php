<?php
$servername = "localhost";
$username = "kullanici_adi"; // Veritabanı kullanıcı adınızı buraya yazın
$password = "sifre"; // Veritabanı şifrenizi buraya yazın
$dbname = "ekolojik_kredi";

// Bağlantıyı oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
