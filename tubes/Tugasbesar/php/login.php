<?php
session_start();

require 'functions.php';
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username berdasarkan id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// Login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

  // mencoba USERNAME dan PASSWORD
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      // jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 + 60 + 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 + 60 + 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
    $error = true;
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    table {
      border: solid black;
      margin: 200px auto 0 auto;
      width: auto;
      height: auto;
    }
  </style>
</head>

<body>
  <form action="" method="post">
    <?php if (isset($error)) : ?>
      <p style="color : red; font-style :italic;">Username adat Password salah</p>
    <?php endif; ?>

    <table border="1" cellspacing="2" cellpadding="10">
      <tr>
        <td colspan="2"><label for="username">Username</label></td>
        <td colspan="2"><input type="text" name="username"></td>
      </tr>
      <tr>
        <td colspan="2"><label for="password">Password</label></td>
        <td colspan="2"><input type="password" name="password"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="checkbox" name="remember">
          <label for="remember">Remember Me</label>
        </td>
        <td colspan="2" align="center">
          <p><a href="registrasi.php">Registrasi</a></p>
        </td>
      </tr>
      <tr>
        <td colspan="4" align="center"><button type="submit" name="submit">Login</button></td>
      </tr>
    </table>
  </form>
</body>

</html>