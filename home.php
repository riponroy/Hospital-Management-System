<?php require('session.php');?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="ripon">
    <title></title>
    <link rel="stylesheet"  href="css/2nd.css">
  </head>
  <body>
<!---header picture--->

    <div class="hd">
    <img src="img/logo  design with.JPG" alt="picture">
  </div>

  <div class="btn">
    <button type="button" name="button"onclick="window.location.href='logout.php'" />Logout</button>
  </div>

  <!---start dropdown menubar-->
    <div class="navbar">

      <div class="dropdown">  <!--1st dropdown menu--->
        <button class="dropbtn">Home
          <i class="fa fa-caret-down"></i>
        </button>

        <!--<div class="dropdown-content">
          <a href="doctorlist.php">Home</a>
        </div> --->
      </div>
        <div class="dropdown">  <!--1st dropdown menu--->
          <button class="dropbtn">Doctor
            <i class="fa fa-caret-down"></i>
          </button>

          <div class="dropdown-content">
            <a href="doctorlist.php">Doctor list</a>
            <a href="addoctor.php">Add Doctor</a>

          </div>
        </div>
              <div class="dropdown">  <!--2nd dropdown menu--->
                <button class="dropbtn">Patient
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="patientlist.php">Patient list</a>
                  <a href="adpatient.php">New Patient</a>

                </div>
              </div>  <div class="dropdown"> <!--3rd dropdown menu--->
                  <button class="dropbtn">Apointment
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="appointmentlist.php">Apointment list</a>
                    <a href="adapointmentlist.php">New apointment</a>

                  </div>
                </div>

                <div class="dropdown"> <!--1st dropdown menu--->
                  <button class="dropbtn" <button class="dropbtn" onclick="window.location.href='https://www.facebook.com/riponcrd'" />Contact
                    <i class="fa fa-caret-down"></i>
                  </button>

                <!--1st search box--->
                
                </div>
          </div>
              <!--font page background pic--->
          <img src="img/rip.jpg" alt="picture">
          <footer>   <!--footer details--->
            <div class="ft">
            <p>© 2018 Ripon roy & White Health. All Rights Reserved.
Privacy and Patient Rights Terms of Use Notice of Non-Discrimination</p>
          </div>
          </footer>
        </body>
        </html>

