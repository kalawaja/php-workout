
<!--

# Your task is to build a high-score component of the classic Frogger game, one of the highest selling and addictive games of all time, and a classic of the arcade era. 
(Türkçesi: Göreviniz, tüm zamanların en çok satan ve bağımlılık yapan oyunlarından biri olan ve arcade döneminin bir klasiği olan klasik Frogger oyununun yüksek puanlı bir bileşenini oluşturmaktır.)

# Your task is to write methods that return the highest score from the list, the last added score and the three highest scores. 
(Türkçesi: Göreviniz, listenin en yüksek puanını, son eklenen puanı ve üç en yüksek puanı döndüren yöntemleri yazmaktır.)

-->

<?php

# High Scores (Türkçesi: Yüksek Skorlar)

class HighScores
{
    private $scores;

    public function __construct(array $scores)
    {
        $this->scores = $scores;
    }

    public function scores(): array
    {
        return $this->scores;
    }

    public function latest(): int
    {
        return $this->scores[count($this->scores) - 1];
    }

    public function personalBest(): int
    {
        return max($this->scores);
    }

    public function personalTopThree(): array
    {
        rsort($this->scores);
        return array_slice($this->scores, 0, 3);
    }
}

$highScores = new HighScores([30, 70, 20, 50]);
//var_dump($highScores->scores());

# 1. Listenin en yüksek puanı:
echo($highScores->personalBest()."<br>");

# 2. Son eklenen puanı:
echo($highScores->latest()."<br>");

# 3. Üç en yüksek puan:
echo implode(', ', $highScores->personalTopThree()) . PHP_EOL;

