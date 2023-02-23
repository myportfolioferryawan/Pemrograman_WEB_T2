/**
Program web untuk mengolah nama-nama anggota keluarga anda dengan kriteria sebagai berikut:
1. Nama-nama disimpan di dalam variabel array.
2. Program menampilkan jumlah kata dan jumlah huruf pada nama yang anda tuliskan.
3. Program menampilkan kebalikan dari nama yang diinputkan.
4. Program menampilkan jumlah konsonan dan jumlah vokal pada nama yang telah diinputkan.
*/
<?php
// Variabel array untuk menyimpan nama-nama anggota keluarga
$nama_keluarga = array("Budi", "Siti", "Ani", "Dewi");
// Looping untuk menampilkan jumlah kata dan jumlah huruf pada masing-masing nama
foreach ($nama_keluarga as $nama) {
    // Menampilkan jumlah kata pada nama yang diinputkan
    $jumlah_kata = str_word_count($nama);
    echo "<p>Jumlah kata pada nama <strong>$nama</strong> adalah $jumlah_kata.</p>";
    // str_word_count adalah sebuah fungsi bawaan (built-in function) dalam PHP yang digunakan untuk menghitung jumlah kata dalam sebuah string.
    // Menampilkan jumlah huruf pada nama yang diinputkan
    $jumlah_huruf = strlen($nama);
    echo "<p>Jumlah huruf pada nama <strong>$nama</strong> adalah $jumlah_huruf.</p>";
    // strlen adalah fungsi bawaan (built-in function) pada PHP yang digunakan untuk menghitung jumlah karakter dalam sebuah string
    // Menampilkan kebalikan dari nama yang diinputkan
    $kebalikan_nama = strrev($nama);
    echo "<p>Kebalikan dari nama <strong>$nama</strong> adalah <strong>$kebalikan_nama</strong>.</p>";
    // strrev adalah sebuah fungsi bawaan (built-in function) dalam PHP yang digunakan untuk membalik urutan karakter dalam sebuah string
}
foreach ($nama_keluarga as $nama) {
    $vocal = 0;
    $kosongan = 0;
    $nama = strtolower($nama); // ubah ke huruf kecil untuk mempermudah penghitungan  
    // strtolower adalah sebuah fungsi bawaan (built-in function) pada PHP yang digunakan untuk mengubah semua karakter dalam sebuah string menjadi huruf kecil.
    for ($i = 0; $i < strlen($nama); $i++) {
        // in_array adalah fungsi bawaan (built-in function) pada PHP yang digunakan untuk memeriksa apakah sebuah nilai ada dalam sebuah array.
        if (in_array($nama[$i], ['a', 'e', 'i', 'o', 'u'])) {
            $vocal++;
        } else {
            $kosongan++;
        }
    }
    echo "Jumlah vokal pada nama $nama: $vocal <br>";
    echo "Jumlah konsonan pada nama $nama: $kosongan <br><br>";
}
