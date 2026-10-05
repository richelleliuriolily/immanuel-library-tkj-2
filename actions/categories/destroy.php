<?php

if (isset($_GET['id'])) {
  echo "Kategori dengan id " . $_GET['id'] . " berhasil dihapus (simulasi)";
} else {
  echo "ID kategori tidak ditemukan";
}