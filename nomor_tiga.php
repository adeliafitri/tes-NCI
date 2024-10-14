<?php
$jumlahSembilan = 0;

for ($i = 1; $i <= 100; $i++) {
    $angkaStr = (string)$i;
    $jumlahSembilan += substr_count($angkaStr, '9');
}

echo "Angka 9 muncul sebanyak: $jumlahSembilan kali.";
?>
