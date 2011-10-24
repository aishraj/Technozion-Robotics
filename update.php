

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<style>
.dynamicpos{position: relative; top: -72px; left: 0px;}   
</style>
</head>
<body>

<?php

  $time = time();
  // Check if there is a cookie, if there isn't then redirect to login screen
if (!isset($_COOKIE['cookie_info'])) 
{
      include ("login.html");
      exit;
}

  // If there is a cookie, validate the cookie
else
{

      // Use Connect Script
      include("connect.php");

      // Include the validation of user file
      include("validateuser.php");

      // If password is correct
      if (validateuser() == true) 
      {


             // Header
		include("pfile.php");
               include("home.php");
               login($key);

              

               $selectteam = $_POST["selectteam"]; // team selected to modify
?>
<div class="dynamicpos">
<form action="update.php" method="POST">
<table border="0"  id="table4" >
        <tr>
                <td width="168" height="33">&nbsp;</td>
                <td height="33"> <font face="Verdana">Team Name:</font></td>
                <td height="33">
                <select size="1" name="selectteam">
<?php
  // Get all the usernames from the database and allow user to choose one
  $users = mysql_query("SELECT * FROM teamdata order by team asc");
  $users1 = mysql_num_rows($users);
  for ($x = 0; $x < $users1; $x++) {
          $teamname1= mysql_result($users,$x,0);
?>
           <option><?php echo "$teamname1"; ?> </option>
<?php
         }
?>
                </select>&nbsp;&nbsp;&nbsp;
                </td>
               
        
                
                <td><input type="submit" value="Select Team">&nbsp;&nbsp;&nbsp;<td>
                <input type="reset" value="Reset"></td>
                 </form> 
                
        </tr>
</table>
<hr>
<form action="updated.php" method="POST">

<?php
 
  // If there was a staff to modify selected
  if ($selectteam) {

      // Get details of user from Database and put them in variables
      $query = mysql_query("SELECT * FROM teamdata WHERE team = '$selectteam'");
      $team = mysql_result($query,0,0);         
      $s1 = mysql_result($query,0,1);      
      $s2 = mysql_result($query,0,2);      
      $s3 = mysql_result($query,0,3);       
      $s4 = mysql_result($query,0,4);      
      $mob1 = mysql_result($query,0,5);        
      $mob2 = mysql_result($query,0,6);        
      $sscore= mysql_result($query,0,7);  
      $dscore = mysql_result($query,0,8);   
     $rsscore= mysql_result($query,0,9);
	
      // Display User Details
      echo "
 <input type='hidden' name='selectteam' value='$selectteam'><center><font color='green' size='15'>  $selectteam</font><br><br></center> 
      <table border='0' id='table1' >

    
 <tr>
               
                <td width='152'><font face='Tahoma'><b>Team Name:</b></td><td>
                 <input type='text' name='team' value='$team'/></td>
        </tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
        <tr>
               
                <td ><font face='Tahoma'>Member 1:</font></td>
                <td> <input type='text' name='s1' value='$s1'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                       
                <td><font face='Tahoma'>Member 2:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td> <input type='text' name='s2' value='$s2' /></td>
        </tr>
        <tr>
               
                <td><font face='Tahoma'>Member 3:</font></td>
                <td> <input type='text' name='s3' value='$s3'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        
                
                <td><font face='Tahoma'>Member 4:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td> <input type='text' name='s4' value='$s4' /></td>
        </tr>
        <tr>
                
                <td width='152'><font face='Tahoma'>Mobile 1:</font></td>
                <td> <input type='text' name='mob1'  value='$mob1'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        
                
                <td width='152'><font face='Tahoma'>Mobile 2:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
                <td> <input type='text' name='mob2'  value='$mob2'/></td>
        </tr>
        <tr>
                
                <td width='152' height='24'><font face='Tahoma' color = 'red'><b>Micromouse Score:</b></font></td>
                <td height='24'> <input type='text' name='sscore'  value='$sscore'/></td>
        
                
                <td width='152'><font face='Tahoma' color='blue'><b>Hurt Locker Score:</b></font></td>
                <td> <input type='text' name='dscore'  value='$dscore'/></td>
        </tr>
	
	 <tr>
                
                <td width='152' height='24'><font face='Tahoma' color = 'red'><b>Robosoccer Score:</b></font></td>
                <td height='24'> <input type='text' name='rsscore'  value='$rsscore'/></td>
        
                
               
        </tr> 	
       
      </table><hr>

<center><input type='submit' value='UPDATE'>";

  }

      // If user and password are not correct print error message
      }
      else {
          echo "Incorrect username/password";
          exit;
      }
  }

?>
</form>

</body>
</html>