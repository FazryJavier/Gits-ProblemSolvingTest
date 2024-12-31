<?php

// Nomor 3 : Balanced Bracket
function bracket($s) {
    $stack = [];
    $pairs = [
        '(' => ')',
        '{' => '}',
        '[' => ']'
    ];

    $s = preg_replace('/\s+/', '', $s);

    foreach (str_split($s) as $char) {
        if (in_array($char, array_keys($pairs))) {
            array_push($stack, $char);
        } 
        elseif (in_array($char, $pairs)) {
            if (empty($stack) || $pairs[array_pop($stack)] !== $char) {
                return "NO";
            }
        }
    }

    return empty($stack) ? "YES" : "NO";
}

echo "Nomor 3 : Balanced Bracket\n";
echo "Masukkan bracket: ";
$nilai = trim(fgets(STDIN));

echo "Output: " . bracket($nilai) . "\n";
?>