<?php
function redirect_to($location){
  if(!headers_sent())
    header("Location: {$location}");
  else
    echo "<script>window.location.href='{$location}';</script>";
  exit;
}
