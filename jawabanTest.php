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

echo "Masukkan input: ";
$input = fgets(STDIN);

if (is_numeric($input) && $input > 0) {
    echo "Hasil barisan: " . soal1((int)$input) . "\n";
}

// Nomor 2 : Dense Ranking
function denseRanking($score, $myscore) {
    $uniqueScores = array_values(array_unique($score));
    rsort($uniqueScores);

    $rankings = [];

    foreach ($myscore as $myscore) {
        $rank = 1;
        foreach ($uniqueScores as $score) {
            if ($myscore < $score) {
                $rank++;
            } else {
                break;
            }
        }

        $rankings[] = $rank;
    }

    return $rankings;
}

echo "Masukkan jumlah pemain: ";
$playerCount = fgets(STDIN);

echo "Masukkan skor pemain: ";
$score = explode(" ", fgets(STDIN));

echo "Masukkan jumlah permainan: ";
$gameCount = fgets(STDIN);

echo "Masukkan skor: ";
$gitsScores = explode(" ", fgets(STDIN));

$rankings = denseRanking($score, $gitsScores);
echo "Hasil ranking: " . implode(" ", $rankings) . "\n";


// Nomor 3 : Balanced Bracket
function isBalanced($s) {
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

echo "Masukkan input: ";
$input = trim(fgets(STDIN));

echo "Output: " . isBalanced($input) . "\n";
?>