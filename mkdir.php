<?php
$curdir = getcwd();
$slash = "/0";
for ($dir = 1; $dir <= 12; $dir++){
  $concat = $slash . $dir;
  if (!file_exists($concat)) {
    mkdir($curdir . "$concat" , 0777);

  }
}


/*if(mkdir($curdir . "/01" , 0777)){
  print "Success";
} else {
  print "Nope";
}*/


?>
