<?php
$name = ['Lintang','Eka'];
function cari($array, $search):bool {
if(in_array($search,$array)) {
  echo "TRUE".'</br>';
  return TRUE;
}else {
  echo "FALSE".'</br>';
  return false;
  }
}
  cari($name, 'Lintang');
  cari($name, 'Eka');
  cari($name, 'Adiastuti');
  ?>