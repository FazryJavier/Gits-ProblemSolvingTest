<?php

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

echo "Nomor 2 : Dense Ranking\n";
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
echo "--------------------\n";

?>