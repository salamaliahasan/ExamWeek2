<?php 

function countVowelsRegex($string) {
    preg_match_all('/[aeiouAEIOU]/', $string, $matches);
    return count($matches[0]);
}

$strings = ["Hello", "World", "PHP", "Programming"];

for($i=0;$i<count($strings);$i++){
    echo "Original String: $strings[$i], Vowel Count:" .countVowelsRegex($strings[$i]).", Reversed String: ".strrev($strings[$i])."\n";
}

?>