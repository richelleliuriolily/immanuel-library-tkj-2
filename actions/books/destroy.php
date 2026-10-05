<?php

if (isset($_GET['id'])) {
  echo "Data buku dengan id " . $_GET['id'] . " berhasil dihapus (simulasi)";
} else {
  echo "ID buku tidak ditemukan";
}