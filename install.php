<?php
  echo "Intializing theme installation\n";


  $url = 'https://raw.githubusercontent.com/callmekass/pfSense-palenight/main/callmekass-palenight.css';

  $file_name = basename($url);
  $file_path = '/usr/local/www/css/'.$file_name;
  
  // Get file from url and save to css themes folder
  if (file_put_contents($file_path, file_get_contents($url)))
  {
      echo 'Theme installed successfully - '.$file_name.'\n';
  }
  else
  {
      echo 'Failed to download theme - '.$file_name.'\n';
  }
?>