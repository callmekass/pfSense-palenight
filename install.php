<?php
  echo "Intializing theme installation\n";

  $symbol_check = "\e[0;32m\xe2\x9c\x93\e[0m";
  $symbol_cross = "\e[0;31m\xe2\x9c\x95\e[0m";

  $url = 'https://raw.githubusercontent.com/callmekass/pfSense-palenight/main/callmekass-palenight.css';

  $file_name = basename($url);
  $file_path = '/usr/local/www/css/'.$file_name;
  
  // Get file from url and save to css themes folder
  if (file_put_contents($file_path, file_get_contents($url)))
  {
      echo $symbol_check.' '.$file_name.' installed successfully.'."\n";
  }
  else
  {
      echo $symbol_cross.' '.$file_name.' failed to download.'."\n";
  }
?>