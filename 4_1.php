<?php
$str="The quick brown fox jumped over the lazy dog";
function sfindLongetWord($str) {

    $words = explode(" ", $str);

    $longestWord = "";
    $maxLength = 0;


    foreach ($words as $word) {
        $wordLength = strlen($word);
        if ($wordLength > $maxLength) {
            $longestWord = $word;
            $maxLength = $wordLength;
        }
    }
    return $longestWord;


}


