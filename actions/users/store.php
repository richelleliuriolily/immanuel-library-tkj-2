<?php

if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role'])) {
  echo "Data pengguna berhasil ditambahkan (simulasi)";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
} else {
  echo "Data tidak lengkap";
}