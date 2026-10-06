<?php

if (isset($_POST['id'], $_POST['name'], $_POST['email'], $_POST['role'])) {
  echo "Data pengguna berhasil diubah (simulasi)";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
} else {
  echo "Data tidak lengkap";
}