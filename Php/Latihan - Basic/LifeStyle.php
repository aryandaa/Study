<?php
/*
SOAL:
Membuat kalkulator sederhana untuk membantu orang mengevaluasi gaya hidup mereka. 
Program ini akan menghitung dan memberi saran berdasarkan data yang diinput user.

Ketentuan:
Buat satu file PHP, tanpa HTML dulu, full di terminal/browser (output pakai echo),
inputan langsung gunakan variable tanpa method "post or gets",

Logic:
1. Hitung total waktu tidak sehat per hari (jam Main Hp + kurang tidur jika < 7 jam).
2. Beri rekomendasi:
 - Kalau total tidak sehat > 10 jam: tampilkan "Waduh, gaya hidupmu bahaya banget, Kak $nama 😭"
 - Kalau antara 6–10 jam: tampilkan "Kamu masih bisa membaik, semangat Kak $nama!"
 - Kalau < 6 jam: tampilkan "Gaya hidup kamu sehat, good job Kak $nama 🥰"
3. Cek apakah makan sehat:
 - Jika $makanSehat == false, tampilkan: "Jangan lupa mulai makan sayur ya 😠"
4. Hitung umur dalam hari dan tampilkan: "Kamu udah hidup selama X hari di dunia ini."


Materi yang dipakai:
- Variabel
- Tipe data: string, int, boolean
- Operator
- if, elseif, else
- Math (penjumlahan, pengurangan)
*/

$nama = readline("masukan nama kamu: ");
$jamMainHp = readline("Masukan jam main hp kamu: ");
$jamTidur = readline("Masukan Jam tidur kamu: ");
$total = $jamMainHp + $jamTidur ;

function hitung(){
    global $total,$nama;
    if ($total > 10){
    echo "Waduh, gaya hidupmu bahaya banget, Kak $nama 😭";
} elseif ($total < 6 AND $total > 10){
    echo "Kamu masih bisa membaik, semangat Kak $nama!";
} elseif ($total < 6) {
    echo "Gaya hidup kamu sehat, good job Kak $nama 🥰";
}
}

echo "Nama : $nama \nTotal waktu tidak sehat: $total\n";
?>