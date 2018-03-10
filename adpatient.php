<?php require('session.php');?>
<?php require 'header.php'; ?>
<!DOCTYPE html>
<html>


<head>
  <link rel="stylesheet" href="css/editpatient.css">
</head>
<body>

<h3>Edit Patient</h3>

<div>
  <form action="#" method="POST">
    <label>Patient Name</label>
    <input type="text" name="name" placeholder="Your name.." required>
	<label>Adress</label>
    <input type="text" name="adress" required>
    <label >Date</label>
    <input type="text" name="date" placeholder=" date.." required>
    <label >Mobile</label>
    <input type="number" name="mobile" placeholder="Your number.."required>

    <input type="submit" name="submit" value="Submit" >
  </form>
</div>
</br>
<?php require('footer.php'); ?>
</body>
</html>
<?php
include('connect.php');
if (isset($_POST['submit'])){
$pname = $_POST['name'];
$dress = $_POST['adress'];
$ate = $_POST['date'];
$Mobile = $_POST['mobile'];
if(!mysqli_connect_errno()){
  $visibility = 1;
  $query = "INSERT INTO patient (`name`, `address`, `date`, `mobile`, `visibility`) VALUES ('{$pname}', '{$dress}', '{$ate}', '{$Mobile}', '{$visibility}')";
  if(mysqli_query($connection, $query)){
    echo "sucessful"."</br>";
  }else{
    echo "databse insert failed";
  }
}else{
  die("Error: ".mysqli_connect_error());
}
mysqli_close($connection);
}
?>

