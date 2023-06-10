<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $pesan = $_POST["pesan"];

  // Konfigurasi email
  $to = "muhammaddikiw-2@email.com";
  $subject = "Pesan dari halaman kontak";
  $message = "Nama: " . $nama . "\n\n" . "Email: " . $email . "\n\n" . "Pesan: " . $pesan;
  $headers = "From: " . $email;

  // Kirim email
  if (mail($to, $subject, $message, $headers)) {
    echo "Pesan telah terkirim.";
  } else {
    echo "Terjadi kesalahan saat mengirim pesan.";
  }
}
?>
