<?php

$strings = ["Hello", "World", "PHP", "Programming"];
function countVowels($strings){
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split(strtolower($strings)) as $singleChar){
        if(in_array($singleChar, $vowels)){
            $count++;
        }
    }
    return $count;
}

foreach($strings as $string){
    $vowelCount = countVowels($string);
    $reversString = strrev($string);
    echo "Original Striing : $string, Vowel Count: $vowelCount, Reversed String : $reversString"."<br>";
}