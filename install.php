<?php

  $symbol_check = "\e[0;32m\xe2\x9c\x93\e[0m";
  $symbol_cross = "\e[0;31m\xe2\x9c\x95\e[0m";

  echo "Intializing theme installation\n";


  $url = 'https://raw.githubusercontent.com/callmekass/pfSense-palenight/main/callmekass-palenight.css';

  $file_name = basename($url);
  $file_path = '/usr/local/www/css/'.$file_name;
  
  // Get file from url and save to css themes folder
  if (file_put_contents($file_path, file_get_contents($url)))
  {
      echo $symbol_check.' - Theme installed successfully - '.$file_name."\n";
  }
  else
  {
      echo $symbol_cross.' - Failed to download theme - '.$file_name."\n";
  }
?>