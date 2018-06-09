<?php

$rexExp = '/( { ( (?: [^{}]* | (?1) )* ) } )/x'; 
$string = "The quick brown {fox, dragon, dinosaur} jumps over the lazy {dog, cat, bear, {lion, tiger}}."; 

preg_match_all($rexExp, $string, $matches);
echo '<pre>'; print_r($matches[2]); echo '</pre>'; 

?>
