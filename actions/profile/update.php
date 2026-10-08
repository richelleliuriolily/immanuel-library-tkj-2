<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
  if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['bio'])) {
    echo "Profil berhasil diubah (simulasi)";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
  } else {
    echo "Data tidak lengkap";
  }
} else {
  echo "Akses tidak valid";
}