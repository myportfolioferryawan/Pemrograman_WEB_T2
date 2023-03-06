<?php
if (isset($_GET['save'])) {
    $name = $_GET['name'];
    echo "Welcome $name <br>";
    $email = $_GET['email'];
    echo "Your email address is $email <br>";
    $password = $_GET['password'];
    echo "Your Password $password <br>";
    $tanggallahir = $_GET['tanggal'];
    echo " Tanggal lahir mu $tanggallahir <br>";
    $programstudy = $_GET['dropdown'];
    echo "Program Study Mu adalah $programstudy <br>";
    $alamat = $_GET['alamat'];
    echo "alamat anda $alamat <br>";
    $handphone = $_GET['telpon'];
    echo "nomer handphone mu $handphone<br>";
    $jeniskelamin = $_GET['jeniskelamin'];
    echo "jenis Kelamin anda adalah $jeniskelamin<br>";
}
