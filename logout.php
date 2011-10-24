<?php

  // Get the MySQL time
  $time = time();

  // Say that user is logged out
  $loggedout = true;

  // If there is a cookie
  if (isset($_COOKIE['cookie_info'])) {

      // Delete the cookie
      setcookie ("cookie_info", "", $time - 3600);

      

      // Include the validation of user file
      include("validateuser.php");

      // If user and password are correct
      if (validateuser() == true) {

          // Use cookie and Extract the cookie data (Username and Password)
          $cookie_info = explode("-", $_COOKIE['cookie_info']);
          
          $passcookie = $cookie_info[0];

          
          
          // The user is not logged out yet
          $loggedout = false;
      }

      // If user and password are not correct print error message
      else {
          echo "Incorrect username/password";
          exit;
      }
}

?>

<html>
<head>
 <meta http-equiv="Refresh" content="1">

<title>Logout</title>
</head>
<CENTER><a href="login.html">Click here to Login in</a><BR>

<?php

 
      echo "You are now logged out<BR>";
  

?>

</CENTER>
</html>