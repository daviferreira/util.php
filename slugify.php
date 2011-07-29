<?php
/**
 * Convert string to slug (ie. friendly URLs)
 * Requires strip_accents
 *
 * @param String $str to be converted 
 * @return String generated slug 
 **/
function slugify($str){
  $str = preg_replace('/[^a-z0-9-]/', '-', strtolower(trim(strip_accents($str))));
  return preg_replace('/-+/', "-", $str);
}
