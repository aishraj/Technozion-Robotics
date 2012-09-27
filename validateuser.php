<?php


function validateuser() 
{

  // Use cookie information and validate cookie
  // Use cookie and Extract the cookie data (Username and Password)
  // 'cookie_info' is the cookie name you assigned it when making the cookie
  $cookie_info = explode("-", $_COOKIE['cookie_info']);
   $passcookie = $cookie_info[0];

  include("pfile.php");
      if ($passcookie == $key) {

          // User is now logged in
          return (true);
      }

      // If the password is incorrect
      else {
           return(false);
      }
  
  
}

?>