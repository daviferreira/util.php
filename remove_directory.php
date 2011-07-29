<?php
function remove_directory($directory, $empty = false){
  $directory = preg_replace('/\/$/', '', $directory);

  if(!file_exists($directory) || !is_dir($directory) || !is_readable($directory)){
    return false;
  }else{
    $handle = opendir($directory);
    while(false !== ($item = readdir($handle))){
      if($item != '.' && $item != '..'){
        $path = $directory.'/'.$item;
        if(is_dir($path)) 
          remove_directory($path);
        else
          unlink($path);
      }
    }
    closedir($handle);

    if(!$empty)
      if(!rmdir($directory))
        return false;

    return true;
  }
}
