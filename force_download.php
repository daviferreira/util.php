<?php
function force_download($file){
  header('Pragma: public');
  header('Expires: 0');
  header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
  header('Cache-Control: private', false);
  header('Content-Type: application/force-download');
  header('Content-length: '.filesize($file));
  header('Content-Disposition: attachment; filename="'.basename($file).'"');
  header('Content-Transfer-Encoding: binary');
  header('Connection: close');
  readfile($file);
  exit;
}
