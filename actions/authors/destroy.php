<?php

if (isset($_GET['id'])) {
  echo "Penulis dengan id " . $_GET['id'] . " berhasil dihapus (simulasi)";
} else {
  echo "ID penulis tidak ditemukan";
}