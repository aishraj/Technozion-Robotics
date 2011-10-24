<?php


  // If there is no cookie presesnt
if (!isset($_COOKIE['cookie_info']))
{
//echo"<script language= \"javascript\">alert(\"no cookie\");</script>";
      // Variables that data come from the form
      $password = $_POST["pass"];

      // Check if password where submitted
      
      if (!$password)
        {
          echo "<center><br>Incorrect password<hr><br><a href=\"login.html\">RETRY</a></center>"; exit;
        }
	include("pfile.php");
    
      if ($password == $key) 
        {
 
           // Get the current time and make the cookie
              $time = time();
              $cookie_data = $password;
             if (setcookie ("cookie_info",$cookie_data, $time+3600)==TRUE)
              {
              }
              else 
              {
                   echo "You computer does not support cookies. <BR> To view other pages after logged in you need to have cookies enabled.<BR>";
              }
            

              // Since this is the first time of login, cookies aren't readable yet
              $firstloginhere = 1;

              // Home
              
              include("home.php");
              login($password);
		init();
		
       }
      else 
       {
              echo "<center><br>Incorrect password<hr><br><a href=\"login.html\">RETRY</a></center>";
              exit;
        }
  }	
  
  // End if no cookie present

?>

<html>
<head>


<?php



  // Use cookie and Extract the cookie data (Username and Password)
  $cookie_info = explode("-", $_COOKIE['cookie_info']);
  $passcookie = $cookie_info[0];
  

  // If no cookies are set then rename the username and password variables
 if (!isset($_COOKIE['cookie_info']))
 {
        $passcookie = $_POST["pass"];
     
 }

 // If password is correct
include("pfile.php");
if ($passcookie == $key) 
 {
        //echo"<script language= \"javascript\">alert(\" cookie\");</script>";
         if ($firstloginhere == 0) 
          {
                  // Home
                    include("home.php");
		       login($passcookie);init();
			
                  
         }
          
      // If user and password are not correct print error message
 }
 else 
  {
          echo "<center><br>Incorrect password<hr><br><a href=\"login.html\">RETRY</a></center>";
          exit;
  }
  // End Login

?>

</body>
</html>