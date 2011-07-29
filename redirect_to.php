<?php
/**
 * Redirects to specified address 
 * If headers were already sent, uses javascript 
 *
 * @param String $location URL or path to redirect
 * @return void
 **/
function redirect_to($location){
  if(!headers_sent())
    header("Location: {$location}");
  else
    echo "<script>window.location.href='{$location}';</script>";
  exit;
}
