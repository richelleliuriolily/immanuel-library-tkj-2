<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['store'])) {
  if (isset($_POST['name'], $_POST['description'])) {
    echo "Kategori berhasil ditambahkan (simulasi)";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
  } else {
    echo "Data tidak lengkap";
  }
} else {
  echo "Akses tidak valid";
}