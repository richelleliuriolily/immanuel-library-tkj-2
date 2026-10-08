<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
  if (isset($_POST['id'], $_POST['name'], $_POST['email'], $_POST['role'])) {
    echo "Data pengguna berhasil diubah (simulasi)";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
  } else {
    echo "Data tidak lengkap";
  }
} else {
  echo "Akses tidak valid";
}