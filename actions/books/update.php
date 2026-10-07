<?php

if (isset($_POST['id'], $_POST['title'], $_POST['isbn'], $_POST['year'], $_POST['stock'], $_POST['category_id'], $_POST['description'])) {
  $authorIds = $_POST['author_ids'] ?? [];

  echo "Data buku berhasil diubah (simulasi)";
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  echo "Penulis terpilih: " . (empty($authorIds) ? "tidak ada" : implode(', ', $authorIds));
} else {
  echo "Data tidak lengkap";
}