<?php
$koneksi=mysqli_connect("localhost","root","","login_db");
//cek koneksi
if (mysqli_connect_error()){
    echo "koneksi database gagal:", mysqli_conner_error();
}else{
    echo "berhasil";
}
?>