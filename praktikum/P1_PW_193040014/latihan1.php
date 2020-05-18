<?php

$a = "hello";
$hello = "Hello World!";

// menampilkan isi variabel $a
// Hello

echo $a . "</br>";

// menampilkan isi varibel $a
// Hello world!
echo $hello . "</br>";

// menampilkan isi dari variabel dengan nama yang sama seperti isi variabel $a
// isi variabel $a = Hello. jadi, nanti akan menampilkan isi dari variabel $hello
// Hello World
echo $$a . "</br>";

?>