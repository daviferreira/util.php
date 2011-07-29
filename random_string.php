<?php
function random_string($length = 8){
  $str = '';
  $base = '0123456789_!@#$%&*()-=+/abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_!@#$%&*()-=+/';
  $i = 0;     
  while($i < $length){ 
    $char = substr($base, mt_rand(0, strlen($base) -1 ), 1);
    if(!strstr($str, $char)){ 
      $str .= $char;
      $i++;
    }
  }
  return $str;
}
