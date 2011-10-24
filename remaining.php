

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
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

               echo "<hr><b><center><font face='Verdana'>Update Remaining Team Details</font></b></center>";

               $selectteam = $_POST["selectteam"]; // team selected to modify
?>

<form action="remaining.php" method="POST">
<table border="0"  id="table4" >
        <tr>
                <td width="168" height="33">&nbsp;</td>
                <td height="33"> <font face="Verdana">Solar System:</font></td>
                <td height="33">
                <select size="1" name="selectteam">
<?php
  // Get all the usernames from the database and allow user to choose one
  $s = mysql_query("SELECT * FROM teamdata where sscore = '0' order by team asc");
  $scount = mysql_num_rows($s);
  for ($x = 0; $x < $scount; $x++) {
          $teamname1= mysql_result($s,$x,0);
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

<form action="remaining.php" method="POST">
<table border="0"  id="table4" >
        <tr>
                <td width="168" height="33">&nbsp;</td>
                <td height="33"> <font face="Verdana">Dockyard&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</font></td>
                <td height="33">
                <select size="1" name="selectteam">
<?php
  // Get all the usernames from the database and allow user to choose one
  $d = mysql_query("SELECT * FROM teamdata where dscore = '0' order by team asc");
  $dcount = mysql_num_rows($d);
  for ($x = 0; $x < $dcount; $x++) {
          $teamname2= mysql_result($d,$x,0);
?>
           <option><?php echo "$teamname2"; ?> </option>
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
     
      // Display User Details
      echo "
 <input type='hidden' name='selectteam' value='$selectteam'><h2><center><font color='green'>$selectteam</font></h2></center> 
      <table border='0' id='table1' height='180'>

    
 <tr>
               
                <td width='152' height='25'><font face='Tahoma'><b>Team Name:</b></td><td>
                 <input type='text' name='team' value='$team'/></td>
        </tr>

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
                
                <td width='152' height='24'><font face='Tahoma' color = 'red'><b>Solar system Score:</b></font></td>
                <td height='24'> <input type='text' name='sscore'  value='$sscore'/></td>
        
                
                <td width='152'><font face='Tahoma' color='blue'><b>Dockyard Score:</b></font></td>
                <td> <input type='text' name='dscore'  value='$dscore'/></td>
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