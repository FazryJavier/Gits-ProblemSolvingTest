<?php

// Nomor 1 : A000124 of Sloane’s OEIS
function soal1($n) {
    $list = [];

    for ($i = 0; $i < $n; $i++) {
        $rumus = ($i * ($i + 1)) / 2 + 1;
        $list[] = $rumus;
    }

    return implode(' ', $list);
}

echo "Nomor 1 : A000124 of Sloane’s OEIS\n";
echo "Masukkan input: ";
$input = fgets(STDIN);

if (is_numeric($input) && $input > 0) {
    echo "Hasil barisan: " . soal1((int)$input) . "\n";
    echo "--------------------\n";
}

?>