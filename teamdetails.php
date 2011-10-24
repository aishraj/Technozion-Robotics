<html>
<head><style>
.dynamicpos{position: relative; top: -72px; left: 0px;}   
</style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>

<?php

  $time = time();

  // Check if there is a cookie, if there isn't then exit!
  if (!isset($_COOKIE['cookie_info'])) {
      echo "Cannot access this page: You aren't logged in";
      exit;
  }

  // If there is a cookie, validate the cookie
  else {

      // Use Connect Script
      include("connect.php");

      // Include the validation of user file
      include("validateuser.php");

      // If user and password are correct
      if (validateuser() == true) {

          // Header
		include("pfile.php");
          include("home.php");
          login($key);
  	  $selectteam = $_GET["team"];

          // Get details of user from Database and put them in variables
          $query = mysql_query("SELECT * FROM teamdata WHERE team = '$selectteam'");
      $team = mysql_result($query,0,0);         
      $s1 = mysql_result($query,0,1);      
      $s2 = mysql_result($query,0,2);      
      $s3 = mysql_result($query,0,3);       
      $s4 = mysql_result($query,0,4);  
      $c1 = mysql_result($query,0,10);      
      $c2 = mysql_result($query,0,11);      
      $c3 = mysql_result($query,0,12);       
      $c4 = mysql_result($query,0,13);         
      $mob1 = mysql_result($query,0,5);        
      $mob2 = mysql_result($query,0,6);        
      $sscore= mysql_result($query,0,7);  
      $dscore = mysql_result($query,0,8);   
      $rsscore = mysql_result($query,0,9);            
          // Make the table displaying details of user
             echo "<div class='dynamicpos'>
          <table border='0' width='100%' id='table1'>
	

        <tr>
                
                <td width='25%' ><b><font face='Tahoma'>Team:</b></td>
                <td width='25%'> <font face='Tahoma'>$team </font></td>
        </tr>
<tr></tr><tr></tr><tr></tr><tr><tr></tr><tr></tr><tr></tr>
<tr>
                
                <td width='100%' colspan = '4'><b><font face='Verdana'>Members</font></b></td>
                
        </tr>
        <tr>
                
                <td width='25%'><font face='Tahoma'>Member 1:</td>
                <td width='25%'> <font face='Tahoma'>$s1 </font></td>
 <td width='25%'><font face='Tahoma'> from </td>
                <td width='25%'> <font face='Tahoma'>$c1 </font></td>
        </tr>
        <tr>
                
                <td width='25%'><font face='Tahoma'>Member 2:</td>
                <td width='25%'> <font face='Tahoma'>$s2 </font></td>
<td width='25%'><font face='Tahoma'> from </td>
                <td width='25%'> <font face='Tahoma'>$c2 </font></td>
        </tr>
        <tr>
               
                <td width='25%'><font face='Tahoma'>Member 3:</td>
                <td width='25%'> <font face='Tahoma'>$s3 </font></td>
<td width='25%'><font face='Tahoma'> from </td>
                <td width='25%'> <font face='Tahoma'>$c3 </font></td>        
</tr>
        <tr>
                <td width='25%'><font face='Tahoma'>Member 4:</td>
                <td width='25%'> <font face='Tahoma'>$s4 </font></td>
<td width='25%'><font face='Tahoma'> from </td>
                <td width='25%'><font face='Tahoma'>$c4 </font></td>     
   </tr><tr></tr><tr></tr><tr></tr><tr><tr></tr><tr></tr><tr></tr>
        <tr>
                
                <td width='25%'><font face='Tahoma'>Mobile 1:</td>
                <td width='25%'> <font face='Tahoma'>$mob1 </font></td>
</tr>
        <tr>
                
                <td width='25%'><font face='Tahoma'>Mobile 2:</td>
                <td width='25%'> <font face='Tahoma'>$mob2 </font></td>
   </tr><tr></tr><tr></tr><tr></tr><tr><tr></tr><tr></tr><tr></tr>
        <tr>
                
                <td width='25%'><font face='Tahoma'>Micromouse Score:</td>
                <td width='25%'> <font face='Tahoma'>$sscore </font></td>
</tr>
        <tr>
                
                <td width='25%'><font face='Tahoma'>Hurt Locker Score:</td>
                <td width='25%'> <font face='Tahoma'>$dscore </font> </td>

        </tr>
         
<tr>
                
                <td width='25%'><font face='Tahoma'>Robosoccer Score:</td>
                <td width='25%'> <font face='Tahoma'>$rsscore </font> </td>

        </tr>

        </table>";
     // If user and password are not correct print error message
     }
     else {
         echo "Incorrect username/password";
         exit;
     }
  }
?>

</html>