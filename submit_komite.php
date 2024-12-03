<?php
include 'db_connect.php';

$okul = $_POST['okul'];
$il = $_POST['il'];
$ilce = $_POST['ilce'];
$sifre = $_POST['sifre'];

$sql = "INSERT INTO komite (okul, il, ilce, sifre)
VALUES ('$okul', '$il', '$ilce', '$sifre')";

if ($conn->query($sql) === TRUE) {
    echo "Komite kaydı başarılı!";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
