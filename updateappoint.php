<?php require('session.php');?>
<?php
require 'header.php';
include('connect.php');
$id = $_GET['id'];
if (!mysqli_connect_errno()){
  $query = "SELECT * FROM appoint WHERE `id`='{$id}'";
  $result = mysqli_query($connection,$query);
  if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $name=$row['dname'];
    $pname=$row['pname'];
    $date=$row['date'];
    $time=$row['time'];
  }
}else{
  echo "ERROR : Database connection failed !"."<br>";
}
//Update the data and Save it into the MySQL database;

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $pname = $_POST['pname'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  if (!mysqli_connect_errno()) {
    $visibility = 1;
    $query = "UPDATE appoint SET `dname`='{$name}',`pname`='{$pname}',
             `date`='{$date}',`time`='{$time}' WHERE `id`='{$id}' ";
    if(mysqli_query($connection, $query)){
      echo "<b><script>alert('SUCCESS : Data update successfully');</script></b>";
      echo "<script>window.location.href = 'appointmentlist.php'</script>";
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
    <input type="text" name="name" value="<?php echo $name;?>"placeholder="Your name..">
    <label >Patient Name</label>
    <input type="text" name="pname" value="<?php echo $pname;?>"placeholder="your patient name..">
    <label >Date</label>
    <input type="text" name="date" value="<?php echo $date;?>"placeholder="Your date..">
    <label >Time</label>
    <input type="text" name="time" value="<?php echo $time;?>"placeholder="current time..">
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
