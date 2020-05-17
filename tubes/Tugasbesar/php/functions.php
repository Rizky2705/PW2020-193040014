<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
    mysqli_select_db($conn, "pw_193040014") or die("Database salah!");
    return $conn;
}
// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
    function tambah($data)
    {
        $conn = koneksi();
        $gambar = htmlspecialchars($data['Gambar']);
        $nama = htmlspecialchars($data['Nama_alat_musik']);
        $asalDaerah = htmlspecialchars($data['Asal_daerah']);
        $caraMain = htmlspecialchars($data['Cara_main']);
        $bahanPembuatan = htmlspecialchars($data['bahan_pembuatan']);

        $query = "INSERT INTO tubes_193040014
                    VALUES
                    ('', '$gambar', '$nama', '$asalDaerah', '$caraMain', '$bahanPembuatan')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM tubes_193040014 WHERE Nomor = $id");

    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    $conn = koneksi();
    $gambar = htmlspecialchars($data['Gambar']);
    $nama = htmlspecialchars($data['Nama_alat_musik']);
    $asalDaerah = htmlspecialchars($data['Asal_daerah']);
    $caraMain = htmlspecialchars($data['Cara_main']);
    $bahanPembuatan = htmlspecialchars($data['bahan_pembuatan']);

    $query = "UPDATE tubes_193040014
                SET
                Gambar = '$gambar',
                Nama_alat_musik = '$nama',
                Asal_daerah = '$asalDaerah',
                Cara_main = '$caraMain',
                bahan_pembuatan = '$bahanPembuatan'
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
    alert('username sudah digunakan');
    </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
