<?php
function snippet_chars($phrase, $start, $max_chars, $delimiter = " &hellip;"){
  if(strlen($phrase) > $max_chars)
    $phrase = substr($phrase, $start, $max_chars).$delimiter;
  return $phrase;
}
