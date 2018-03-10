<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet"  href="css/2nd.css">
  </head>
  <body>
    <div class="hd">
    <img src="img/logo  design with.JPG" alt="picture">
  </div>
  <div class="btn">
    <button type="button" name="button"onclick="window.location.href='logout.php'" />Logout</button>
  </div>
    <div class="navbar">

      <div class="dropdown">  <!--1st dropdown menu--->
        <button class="dropbtn" onclick="window.location.href='home.php'" />Home
          <i class="fa fa-caret-down"></i>
        </button>
      </div>

        <div class="dropdown">
          <button class="dropbtn">Doctor
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="doctorlist.php">Doctor list</a>
            <a href="addoctor.php">Add Doctor</a>

          </div>
        </div>
              <div class="dropdown">
                <button class="dropbtn">Patient
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="patientlist.php">Patient list</a>
                  <a href="adpatient.php">New Patient</a>

                </div>
              </div>  <div class="dropdown">
                  <button class="dropbtn">Apointment
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="appointmentlist.php">Apointment list</a>
                    <a href="adapointmentlist.php">New apointment</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn" onclick="window.location.href='https://www.facebook.com/riponcrd'" />Contact
                    <i class="fa fa-caret-down"></i>
                  </button>
                </div>
          </div>
  </body>
</html>
