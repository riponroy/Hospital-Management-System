<?php require('session.php');?>
<?php
include('connect.php');
$id = $_GET['id'];
if (!mysqli_connect_errno()){
  $visibility = 0;
  $update_query = "UPDATE doctor SET `visiblity`= '{$visibility}' WHERE `id`='{$id}' ";
  if (mysqli_query($connection,$update_query)) {
    echo "<script>window.location.href = 'doctorlist.php'</script>";
  }else{
    echo "ERROR : failed to Delete data"."<br>";
  }
}else{
  echo "ERROR : Database connection failed !"."<br>";
}
mysqli_close($connection);

 ?>
