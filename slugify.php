<?php
// Requires strip_accents
function slugify($str){
  $str = preg_replace('/[^a-z0-9-]/', '-', strtolower(trim(strip_accents($str))));
  return preg_replace('/-+/', "-", $str);
}
