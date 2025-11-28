<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to      = "lensamedia48@gmail.com";
    $subject = "Pesanan Baru dari Website";
    $message = "Nama: " . $_POST['nama'] . "\n"
             . "Alamat: " . $_POST['alamat'] . "\n"
             . "Produk & Jumlah: " . $_POST['produk'] . "\n"
             . "Nomor HP/WA: " . $_POST['nohp'] . "\n";
    $headers = "From: noreply@aliybharprojeck.com\r\n";

    mail($to, $subject, $message, $headers);

    header("Location: order-berhasil.html");
    exit();
}
?>