<?php

session_start();
include('connect.php');
if(isset($_POST['submit'])) {
  $myusername = mysqli_real_escape_string($connection,$_POST['user']);
  $mypassword = mysqli_real_escape_string($connection,$_POST['psw']);
  $sql = "SELECT `id` FROM user WHERE `username`= '{$myusername}' and `password` = '{$mypassword}' AND `visible`= '{$visibility}'";
  $result = mysqli_query($connection,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['active'];
  $count = mysqli_num_rows($result);
  // If result matched $myusername and $mypassword, table row must be 1 row
  if($count == 1) {
    $_SESSION['user'] = $myusername;
    header("location: home.php");
  }else {
    echo "<script>alert('Your Login Name or Password is invalid');</script>";
  }
}
?>
<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <title>Hospital mangement system</title>
      <link rel="stylesheet" href="css/index.css">
    </head>
<body>
    <div class="name">
      <!---button details--->
      <div class="btn">
        <button type="button" name="button"><a href="index.php">Logout</a></button>
      </div>
      <!---header logo picture--->
         <div class="logo">
           <img src="img/logo1.JPG" alt="picture">
          </div>
         <h1>Best Care Hospital In Bangladesh</h1>
    </div>
<!---submit form details--->
    <div class="frpd" style="float:left; ">
      <div class="fmn">
          <form action="#" method="POST">
            <label>Username</label>
              <input type="text"  name="user" placeholder="Your Username" required>
              <label>Password</label>
              <input type="password" name="psw" required>
              <input type="submit" name="submit" value="Submit">
			  <p><strong>Username:</strong>ripon<br><strong>Password:</strong>123456</p>
            </form>
			
        </div>
		
      </div>

  </div>
  <footer>   <!--footer details--->
    <div class="ft">
    <p>© 2018 Ripon roy & White Health. All Rights Reserved.
  Privacy and Patient Rights Terms of Use Notice of Non-Discrimination</p>
  </div>
  </footer>

  </body>
</html>