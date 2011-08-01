<?php
include '../redirect_to.php';
$header  = isset($_GET['header']) ? trim($_GET['header']) : NULL;
if($header)
  echo "header";

redirect_to("http://www.google.com");
