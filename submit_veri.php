<?php
include 'db_connect.php';

$ogrenci_id = $_POST['ogrenci_id'];
$atik_turu = $_POST['atik_turu'];
$atik_kutlesi = $_POST['atik_kutlesi'];
$hatali_ayrisim = $_POST['hatali_ayrisim'];

$sql = "INSERT INTO atiklar (ogrenci_id, atik_turu, atik_kutlesi, hatali_ayrisim)
VALUES ('$ogrenci_id', '$atik_turu', '$atik_kutlesi', '$hatali_ayrisim')";

if ($conn->query($sql) === TRUE) {
    echo "Atık başarıyla eklendi!";
} else {
    echo "Hata: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
