<?php
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}



require 'functions.php';
$id = $_GET['Nomor'];

if (hapus($id) > 0) {
  echo "<Script>
        alert ('Data Berhasil dihapus!');
        document.location.href = 'admin.php';
      </script>";
} else {
  echo "<Script>
          alert ('Data Gagal dihapus!');
          document.location.href = 'admin.php';
        </script>";
}
