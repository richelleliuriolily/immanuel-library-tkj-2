<?php

if (isset($_GET['id'])) {
  echo "Data pengguna dengan id " . $_GET['id'] . " berhasil dihapus (simulasi)";
} else {
  echo "ID pengguna tidak ditemukan";
}