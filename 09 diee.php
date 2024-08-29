<?php
//Penggunaan Dasar fungsi die()
if (file_exists('file_important.txt')) {
    echo "File ditemukann.";
} else {
    die("Error: File tidak ditemukan.");
}
//Menambahkan Status HTTP
if (!user_is_logged_in()) {
    header('HTTP/1.1 403 Forbidden');
    die("Error: Kamu tidak memiliki aksesss.");
}
//Menggabungkan dengan fungsi exit()
if ($koneksi_database == false) {
    exit(1); // menghentikan skrip dengan kode keluar 1
}
//Memahami Output Bufferingg
ob_start();
echo "Ini adalah output bufferr.";

// Kondisi tertentu
if ($error) {
    ob_end_clean(); // bersihkan output buffer
    die("Skrip dihentikan karena errorr.");
}








