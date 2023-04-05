<?php
  echo "Intializing theme installation";


  $url = 'https://raw.githubusercontent.com/callmekass/pfSense-palenight/main/callmekass-palenight.css';

  // Use basename() function to return the base name of file
  $file_name = basename($url);

  echo $file_name;
  
  // Use file_get_contents() function to get the file
  // from url and use file_put_contents() function to
  // save the file by using base name
  if (file_put_contents($file_name, file_get_contents($url)))
  {
      echo "File downloaded successfully\n";
  }
  else
  {
      echo "File downloading failed.\n";
  }

?>