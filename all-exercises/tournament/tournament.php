
<!--
Group G of The Champions League the results of football competition.
(Türkçesi: Şampiyonlar Ligi'nin A grubu futbol müsabakalarının sonuçları.)

Based on an input file containing which team played against which and what the outcome was, create a file with a table like this:
(Türkçesi: Takımın kiminle oynadığı ve sonucunun ne olduğunu içeren bir giriş dosyasına dayanarak, şu tabloyu içeren bir dosya oluşturun:)

Team                           | MP |  W |  D |  L |  P
Besiktas JK                    |  6 |  4 |  2 |  0 |  14
FC Porto                       |  6 |  3 |  1 |  2 |  10
RB Leipzig                     |  6 |  2 |  1 |  3 |  6
AS Monaco                      |  6 |  0 |  2 |  4 |  2

What do those abbreviations mean?
(Türkçesi: Bu kısaltmalar ne anlama gelir?)

MP: Matches Played             -> (Türkçesi: Oynanan Maçlar)
W: Matches Won                 -> (Türkçesi: Kazanılan Maçlar)
D: Matches Drawn (Tied)        -> (Türkçesi: Berabere Biten Maçlar)
L: Matches Lost                -> (Türkçesi: Kaybedilen Maçlar)
P: Points                      -> (Türkçesi: Puanlar)

A win earns a team 3 points. A draw earns 1. A loss earns 0.
(Türkçesi: Bir galibiyet takımına 3 puan kazandırır. Bir beraberlik 1 puan kazandırır. Bir mağlubiyet 0 puan kazandırır.)

The outcome should be ordered by points, descending. In case of a tie, teams are ordered alphabetically.
(Türkçesi: Sonuçlar puanlarla, azalan sırada sıralanmalıdır. Eşitlik durumunda, takımlar alfabetik olarak sıralanır.)

** Input ** (Türkçesi: Girdi)

Your match results will receive input that looks like:
(Türkçesi: Maç sonuçlarınız şu şekilde görünecektir:)

RB Leipzig;AS Monaco;draw
FC Porto;Besiktas JK;loss
Besiktas JK;RB Leipzig;win
AS Monaco;FC Porto;loss
AS Monaco;Besiktas JK;loss
RB Leipzig;FC Porto;win
Besiktas JK;AS Monaco;draw
FC Porto;RB Leipzig;win
Besiktas JK;FC Porto;draw
AS Monaco;RB Leipzig;loss
FC Porto;AS Monaco;win
RB Leipzig;Besiktas JK;loss

The result of the match refers to the first team listed.
(Türkçesi: Maçın sonucu ilk listelenen takıma göre belirlenir.)

Besiktas JK;RB Leipzig;win
means that the Besiktas JK beat the RB Leipzig.
(Türkçesi: Besiktas JK, RB Leipzig'i yenmiştir.)

AS Monaco FC;Besiktas JK;loss
means that the Beşiktai beat the AS Monaco FC.
(Türkçesi: Besiktas JK, AS Monaco FC'yi yenmiştir.)

RB Leipzig;AS Monaco FC;draw
means that the RB Leipzig and AS Monaco FC tied.
(Türkçesi: RB Leipzig ve AS Monaco FC berabere kalmıştır.)
-->

<?php

# Tournament (Türkçesi: Turnuva)

// Definition and Usage
// (Türkçesi: Tanım ve Kullanım)

# çözüm 
// 1. dosyayı oku
// 2. dosyayı satır satır oku
// 3. satırı parçala
// 4. parçalanan satırı takımlara ayır
// 5. takımları sırala
// 6. sıralanan takımları dosyaya yaz

// 1. dosyayı oku
$lines = file('tournament.txt');

// 2. dosyayı satır satır oku
foreach ($lines as $line) {
    // 3. satırı parçala
    $parts = explode(';', $line);
    // 4. parçalanan satırı takımlara ayır
    $teams[$parts[0]][] = $parts[2];
    $teams[$parts[1]][] = $parts[2];
}

// 5. takımları sırala
uksort($teams, function ($a, $b) use ($teams) {
    $aPoints = 0;
    $bPoints = 0;
    foreach ($teams[$a] as $result) {
        if ($result == 'win') {
            $aPoints += 3;
        } elseif ($result == 'draw') {
            $aPoints += 1;
        }
    }
    foreach ($teams[$b] as $result) {
        if ($result == 'win') {
            $bPoints += 3;
        } elseif ($result == 'draw') {
            $bPoints += 1;
        }
    }
    foreach ($teams[$a] as $result) {
        if ($result == 'loss') {
            $aPoints += 0;
            $bPoints += 3;
        }
    }
    foreach ($teams[$b] as $result) {
        if ($result == 'loss') {
            $aPoints += 3;
            $bPoints += 0;
        }
    }
    if ($aPoints == $bPoints) {
        return $a <=> $b;
    }
    return $bPoints <=> $aPoints;
});

// 6. sıralanan takımları dosyaya yaz
$fp = fopen('tournament.txt', 'w');
fwrite($fp, "Team                          | MP |  W |  D |  L |  P

");
foreach ($teams as $team => $results) {
    $mp = count($results);
    $w = 0;
    $d = 0;
    $l = 0;
    foreach ($results as $result) {
        if ($result == 'win') {
            $w++;
        } elseif ($result == 'draw') {
            $d++;
        } else {
            $l++;
        }
    }
    $p = $w * 3 + $d;
    fwrite($fp, sprintf("%-30s| %2d | %2d | %2d | %2d | %2d

", $team, $mp, $w, $d, $l, $p));
}
fclose($fp);

?>
