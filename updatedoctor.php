<?php require('session.php');?>
<?php
include('connect.php');
require 'header.php';
$id = $_GET['id'];
if (!mysqli_connect_errno()){
  $query = "SELECT * FROM doctor WHERE `id`='{$id}'";
  $result = mysqli_query($connection,$query);
  if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $name=$row['name'];
    $email=$row['email'];
    $mobile=$row['mobile'];
  }
}else{
  echo "ERROR : Database connection failed !"."<br>";
}
//Update the data and Save it into the MySQL database;

if (isset($_POST['submit'])) {
  $fname = $_POST['name'];
  $mail = $_POST['email'];
  $mobile = $_POST['mobile'];
  if (!mysqli_connect_errno()) {
    $visibility = 1;
    $query = "UPDATE doctor SET `name`='{$fname}',`email`='{$mail}',
             `mobile`='{$mobile}' WHERE `id`='{$id}' ";
    if(mysqli_query($connection, $query)){
      echo "<b><script>alert('SUCCESS : Data update successfully');</script></b>";
      echo "<script>window.location.href = 'doctorlist.php'</script>";
    }else{
      echo "Database Insert Failed";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection);
}
 ?>


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

<div class="">
  <form action="#" method="POST">
    <label >Doctor Name</label>
    <input type="text" name="name" value="<?php echo $name;?>" placeholder="Your name..">
    <label >Email</label>
    <input type="email" name="email" value="<?php echo $email;?>"  placeholder="your email..">
    <label >Mobile Number</label>
    <input type="number" name="mobile" value="<?php echo $mobile;?>"  placeholder="Your number..">

    <!--<label for="Specialist">Specialist</label>
    <select id="Specialist" name="Specialist">
      <option value="Addiction psychiatrist">Addiction psychiatrist</option>
      <option value="Cardiologist">Cardiologist</option>
      <option value="Cardiovascular surgeon">Cardiovascular surgeon</option>
      <option value="Anesthesiologist">Anesthesiologist</option>
    </select>
  -->

    <input name="submit" type="submit" value="Submit">
  </form>
</div>
</div>
</br>
<?php require('footer.php'); ?>
</body>
</html>
