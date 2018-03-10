<?php require('session.php');?>
<?php
include('connect.php');
$id = $_GET['id'];
if (!mysqli_connect_errno()){
  $visibility = 0;
  $update_query = "UPDATE patient SET `visibility`= '{$visibility}' WHERE `id`='{$id}' ";
  if (mysqli_query($connection,$update_query)) {
    echo "<script>window.location.href = 'patientlist.php'</script>";
  }else{
    echo "ERROR : failed to Delete data"."<br>";
  }
}else{
  echo "ERROR : Database connection failed !"."<br>";
}
mysqli_close($connection);

 ?>
