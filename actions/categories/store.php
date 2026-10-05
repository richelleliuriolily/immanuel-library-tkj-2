<?php

if (isset($_POST['name'], $_POST['description'])) {
  echo "Kategori berhasil ditambahkan (simulasi)";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
} else {
  echo "Data tidak lengkap";
}