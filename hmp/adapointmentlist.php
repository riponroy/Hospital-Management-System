<?php require('session.php');?>
<?php require('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/appointmentlist.css">
</head>
<body>

<h3>Edit Doctor list</h3>
<!---<div class="hd">
<img src="img/logo  design with.JPG" alt="picture">
</div>---->
<div class="pc">
<!---<img src="img/rip.jpg" alt="picture">--->

<div>
  <form action="#" method="POST">
    <label >Doctor Name</label>
    <input type="text" name="name" placeholder="Your name..">
    <label >Patient Name</label>
    <input type="text" name="pname" placeholder="your patient name..">
    <label >Date</label>
    <input type="text" name="date" placeholder="Your date..">
    <label >Time</label>
    <input type="text" name="time" placeholder="current time..">
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
$dname = $_POST['name'];
$pname = $_POST['pname'];
$date = $_POST['date'];
$time = $_POST['time'];
if(!mysqli_connect_errno()){
  $visibility = 1;
  $query = "INSERT INTO  appoint (`dname`, `pname`, `date`,`time`, `visibility`) VALUES ('{$dname}', '{$pname}', '{$date}','{$time}', '{$visibility}')";
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
