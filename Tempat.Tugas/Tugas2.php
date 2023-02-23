<?php

/**
 * SOAL NO 1
 */
// Input nilai dari setiap komponen penilaian
$tugas = 80;
$uts = 85;
$uas = 90;
// Hitung nilai akhir
$nilai_akhir = ($tugas * 0.2) + ($uts * 0.3) + ($uas * 0.5);
// Hitung grade berdasarkan nilai akhir
if ($nilai_akhir >= 85) {
    $grade = 'A';
} elseif ($nilai_akhir >= 80 && $nilai_akhir < 85) {
    $grade = 'A-';
} elseif ($nilai_akhir >= 75 && $nilai_akhir < 80) {
    $grade = 'B+';
} elseif ($nilai_akhir >= 70 && $nilai_akhir < 75) {
    $grade = 'B';
} elseif ($nilai_akhir >= 65 && $nilai_akhir < 70) {
    $grade = 'C+';
} elseif ($nilai_akhir >= 60 && $nilai_akhir < 65) {
    $grade = 'C';
} elseif ($nilai_akhir >= 50 && $nilai_akhir < 60) {
    $grade = 'D';
} else {
    $grade = 'E';
}
// Output nilai akhir dan grade
echo "Nilai akhir: " . $nilai_akhir . "<br>";
echo "Grade: " . $grade . "<br>";
"<br>";
/**
 * SOAL NO 2
 */
// Mencetak 5 baris bintang
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
// Mencetak 5 baris bintang dari 5 ke 1 bintang
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
// Mecetak baris angka 
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
// Mencetak baris angka dari 5 baris ke 1 baris 
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
// Soal No 3 
/**
 * ou put $10,000 into a bank account that earns 5 percent interest per year. 
 * How many years does it take for the account balance to be double the original?
 * Gunakan fungsi untuk menyelesaikan soal
 */
function tahunGanda($modalAwal, $tingkatBunga)
{
    $tahun = 0;
    $saldo = $modalAwal;
    while ($saldo < 2 * $modalAwal) {
        $saldo += $saldo * $tingkatBunga;
        $tahun++;
    }
    return $tahun;
}
$modalAwal = 10000;
$tingkatBunga = 0.05;
$tahun = tahunGanda($modalAwal, $tingkatBunga);
echo "Dibutuhkan $tahun tahun agar saldo rekening menjadi dua kali lipat dari modal awal. <br>";
/**
 * SOAL NO 4
 * Tentukan sebuah bilangan
 * Buat fungsi untuk menampilkan terbilang
 * Contoh
 * Bilangan  = 650
 * Terbilang = enam ratus lima puluh
 */
function terbilang($angka)
{
    $angka = abs($angka);
    $angka_terbilang = "";

    $angka_array = array(
        0 => "nol",
        1 => "satu",
        2 => "dua",
        3 => "tiga",
        4 => "empat",
        5 => "lima",
        6 => "enam",
        7 => "tujuh",
        8 => "delapan",
        9 => "sembilan",
        10 => "sepuluh",
        11 => "sebelas"
    );

    if ($angka < 12) {
        $angka_terbilang = $angka_array[$angka];
    } else if ($angka < 20) {
        $angka_terbilang = terbilang($angka - 10) . " belas";
    } else if ($angka < 100) {
        $angka_terbilang = terbilang(floor($angka / 10)) . " puluh " . terbilang($angka % 10);
    } else if ($angka < 200) {
        $angka_terbilang = "seratus " . terbilang($angka - 100);
    } else if ($angka < 1000) {
        $angka_terbilang = terbilang(floor($angka / 100)) . " ratus " . terbilang($angka % 100);
    } else if ($angka < 2000) {
        $angka_terbilang = "seribu " . terbilang($angka - 1000);
    } else if ($angka < 1000000) {
        $angka_terbilang = terbilang(floor($angka / 1000)) . " ribu " . terbilang($angka % 1000);
    } else if ($angka < 1000000000) {
        $angka_terbilang = terbilang(floor($angka / 1000000)) . " juta " . terbilang($angka % 1000000);
    } else {
        $angka_terbilang = "Angka terlalu besar";
    }

    return $angka_terbilang;
}

$bilangan = 3278;
echo "Bilangan: " . $bilangan . "<br>";
echo "Terbilang: " . terbilang($bilangan);
