<?php
function snippet_words($str, $max_words, $delimiter = " &hellip;"){
  $phrase_array = explode(" ", $str);
  if(count($phrase_array) > $max_words && $max_words > 0)
    $str = implode(" ", array_slice($phrase_array, 0, $max_words)).$delimiter;
  return $str;
}
