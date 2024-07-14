 <?php

  // create the curl handle
  $ch = curl_init();
  
  // setting several options like url, timeout, returntransfer
  curl_setopt($ch, CURLOPT_URL, 'http://www.google.com');
  curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  // get the content of the url and put it into the output variable (thanks to the returntransfer option)
  $output = curl_exec($ch);
  
  // echo the output to the screen
  echo $output;
  
  // Print the curl info like http response code, content type etc.
  echo '<pre>';
  print_r (curl_getinfo($ch));
  echo '</pre>';
  
  // close the curl handle to free system resources
  curl_close($ch);

?>