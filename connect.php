<?php
$visibility = 1;
$connection = mysqli_connect('localhost', 'root', '', 'project' );
if(mysqli_connect_errno()){
  echo "Faild to connect to Mysql:". mysqli_connect_error();
}
 ?>
