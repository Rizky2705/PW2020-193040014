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
        $bahanPembuatan = htmlspecialchars($data['Bahan_pembuatan']);

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
