<?php require('session.php');?>
<?php require('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/editdoctor.css">
</head>
<body>

<h3>Add Doctor</h3>
<!---<div class="hd">
<img src="img/logo  design with.JPG" alt="picture">
</div>---->
<div class="pc">
<!---<img src="img/rip.jpg" alt="picture">--->

<div>
  <form action="#" method="POST">
    <label >Doctor Name</label>
    <input type="text" name="name" placeholder="Your name.." required>
    <label >Email</label>
    <input type="email" name="email" placeholder="your email.." required>
    <label >Mobile Number</label>
    <input type="number" name="mobile" placeholder="Your number.." required>

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
<?php
include('connect.php');
if (isset($_POST['submit'])){
$pname = $_POST['name'];
$adress = $_POST['email'];
$Gender = $_POST['mobile'];
if(!mysqli_connect_errno()){
  $visibility = 1;
  $query = "INSERT INTO doctor (`name`, `email`, `mobile`, `visiblity`) VALUES ('{$pname}', '{$adress}', '{$Gender}', '{$visibility}')";
  if(mysqli_query($connection, $query)){
    echo "sucessful";
  }else{
    echo "databse insert failed";
  }
}else{
  die("Error: ".mysqli_connect_error());
}
mysqli_close($connection);
}


?>