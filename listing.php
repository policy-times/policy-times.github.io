<?php
$scan = scandir('myFolder');
foreach($scan as $file) {
   if (!is_dir("myFolder/$file")) {
      echo $file.'\n';
   }
}
?>