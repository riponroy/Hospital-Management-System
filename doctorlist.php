<?php require('session.php');?>
<?php require('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/editdoctor.css">
</head>
<body>

<h3>Edit Doctor list</h3>
<!---<div class="hd">
<img src="img/logo  design with.JPG" alt="picture">
</div>---->
<div class="pc">
<!---<img src="img/rip.jpg" alt="picture">--->

<div>

</div>
</div>
</body>
</html>
<?php
  include('connect.php');
  if(!mysqli_connect_errno())
  {
  $query = "SELECT *  FROM `doctor` WHERE `visiblity` = 1";

  $result = mysqli_query($connection, $query);
  if($result){
    echo "<table id = tbl3>
    <tr>
      <th>Sl no</th>
      <th>Id No</th>
      <th>Doctor Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Update</th>
      <th>Delete</th>
    </tr>";
    $sl_no =0;
    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
      $sl_no = $sl_no + 1;
      $id = $row['id'];
      echo "<tr>";
      echo "<td>".$sl_no."</td>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".ucwords($row['name'])."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['mobile']."</td>";
      echo "<td>"."<a href = 'updatedoctor.php?id=$id' id = 'update'>Update</a>"."</td>";
      echo "<td>"."<a href = 'delectdoctor.php?id=$id' id = 'delete'>Delete</a>"."</td>";
      echo "</tr>";
    }
    echo "</table>"."</br>";
    require 'footer.php';

  }}
else{
  die("Error: ".mysqli_connect_error());
}
mysqli_close($connection);
?>
