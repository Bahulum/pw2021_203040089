<?php
$pemainbola = ["Mohammad salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Nermar jr"];

echo "<p style = 'font-weight: bold;padding: 15px'>Daftar pemain bola terkenal</p>";
echo "<ul>";
foreach ($pemainbola as $no => $pb) {
    $nomer = $no + 1;
    echo "<ol> $nomer. $pb</ol>";
}
echo "</ul>";

$pemainbola[] = "Luca Modric";
$pemainbola[] = "Sadio Mane";
sort($pemainbola);


echo "<p style = 'font-weight: bold;padding: 15px'>Daftar pemain bola terkenal baru</p>";
echo "<ul>";
foreach ($pemainbola as $no => $pb) {
    $nomer = $no + 1;
    echo "<ol> $nomer. $pb</ol>";
}
echo "</ul>";
