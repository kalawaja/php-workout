
<!--
Calculate the Hamming Distance between two DNA strands. 
(Türkçesi: Hamming Mesafesi)

 If we compare two strands of DNA and count the differences between them we can see how many mistakes occurred. 
 (Türkçesi: Eğer iki DNA zincirini karşılaştırırsak ve farklılıklarını sayarsak kaç hata olduğunu görebiliriz.) 
 
 This is known as the "Hamming Distance". 
 (Türkçesi: Bu "Hamming Mesafesi" olarak bilinir.)

We read DNA using the letters C,A,G and T. 
(Türkçesi: DNA'yı C,A,G ve T harfleriyle okuruz.)

Two strands might look like this: 
(Türkçesi: İki zincir şu şekilde görünebilir:)

GAGCCTACTAACGGGAT
CATCGTAATGACGGCCT
^ ^ ^  ^ ^    ^^

They have 7 differences, and therefore the Hamming Distance is 7. 
(Türkçesi: 7 farklılık var ve bu yüzden Hamming Mesafesi 7'dir.)

See(1): http://en.wikipedia.org/wiki/Hamming_distance
See(2): http://rosalind.info/problems/hamm/
-->

<?php

# Hamming Distance (Türkçesi: Hamming Mesafesi)

// Definition and Usage 
// (Türkçesi: Tanım ve Kullanım)

// The str_split() function splits a string into an array. 
// (Türkçesi: str_split() fonksiyonu bir diziye bir dizenin bölünmesini sağlar.)

function hammingDistance($strand1, $strand2) {
    $strand1 = str_split($strand1);
    $strand2 = str_split($strand2);
    $distance = 0;
    foreach ($strand1 as $key => $value) {
        if ($value != $strand2[$key]) {
            $distance++;
        }
    }
    return $distance;
}

echo hammingDistance("GAGCCTACTAACGGGAT", "CATCGTAATGACGGCCT");