

<html>
<head><style>
.dynamicpos{position: relative; top: -72px; left: 0px;}   
</style>
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

               echo "<div class='dynamicpos'><hr><h3><b><center><font face='Verdana'>Rankings</font></b></center></h3><hr>";
               
?>
<!--
<table border="1"  id="table4" width="100%" border="border">
        <thead>
                <td align="center" width ="8%" colspan ="1"> <b><font face="Verdana" color="orange">Mobile Control</b></font></td>
                <td align="center" width ="46%" colspan ="2"> <b><font face="Verdana" color="orange">Robo War</b></font></td>
                <td align="center" width ="46%" colspan ="2"> <b><font face="Verdana" color="orange">RoboSoccer</b></font></td>
				<td align="center" width ="46%" colspan ="2"> <b><font face="Verdana" color="orange">LineFollower</b></font></td>
	</thead
        <tr><td align="center" width ="8%"><b>Teamname</b></td>
			<td align="center" width ="8%"><b>Score</b></td>
             <td align="center" width ="23%"><b>Teamname</b></td>
            <td align="center" width ="23%"><b>Score</b></td>
            <td align="center" width ="23%"><b>Teamname</b></td>
            <td align="center" width ="23%"><b>Score</b></td>
			<td align="center" width ="23%"><b>Teamname</b></td>
            <td align="center" width ="23%"><b>Score</b></td>
       </tr>
	   -->

        
<!--</table>-->

<!-------printing starts Here---------------- -->
<table border="1"  id="table5" width="54%" border="border">
        <thead>
                <td align="center" width ="13%" colspan ="1"> <b><font face="Verdana" color="orange">Rank</b></font></td>
                <td align="center" width ="86%" colspan ="2"> <b><font face="Verdana" color="orange">Mobile Control</b></font></td>
                
	</thead
        <tr><td align="center" width ="14%"><b></b></td>
<td align="center" width ="43%"><b>Teamname</b></td>
            <td align="center" width ="43%"><b>Score</b></td>
            
       </tr>
<?php
  // Get all the usernames from the database and allow user to choose one
  $s = mysql_query("SELECT * FROM teamdata where team <> '' order by mcscore desc");
  
  for ($x = 0; $x < 5 && $x < mysql_num_rows($s); $x++) 
  {
          $teamname1= mysql_result($s,$x,0);
          $sc1= mysql_result($s,$x,8);
	  
?>
           <tr><td align="center" width="14%"><?php echo $x+1 ; ?><td align="center" width ="43%"><?php echo"<a href='teamdetails.php?team=$teamname1'>$teamname1</a><td align='center' width ='43%'>$sc1";?></td></tr>
<?php
    }
?>
        
</table>
<!----------------------- -->
<br/><br/><br/>
<!----------------------- -->
<table border="1"  id="table5" width="54%" border="border">
        <thead>
                <td align="center" width ="13%" colspan ="1"> <b><font face="Verdana" color="orange">Rank</b></font></td>
                <td align="center" width ="86%" colspan ="2"> <b><font face="Verdana" color="orange">Robo Wars</b></font></td>
                
	</thead
        <tr><td align="center" width ="14%"><b></b></td>
<td align="center" width ="43%"><b>Teamname</b></td>
            <td align="center" width ="43%"><b>Score</b></td>
            
       </tr>
<?php
  // Get all the usernames from the database and allow user to choose one
  $s = mysql_query("SELECT * FROM teamdata where team <> '' order by rwscore desc");
  
  for ($x = 0; $x < 5 && $x < mysql_num_rows($s); $x++) 
  {
          $teamname1= mysql_result($s,$x,0);
          $sc1= mysql_result($s,$x,9);
	  
?>
           <tr><td align="center" width="14%"><?php echo $x+1 ; ?><td align="center" width ="43%"><?php echo"<a href='teamdetails.php?team=$teamname1'>$teamname1</a><td align='center' width ='43%'>$sc1";?></td></tr>
<?php
    }
?>
        
</table>
<!----------------------- -->
<br/><br/><br/>
<!----------------------- -->
<table border="1"  id="table5" width="54%" border="border">
        <thead>
                <td align="center" width ="13%" colspan ="1"> <b><font face="Verdana" color="orange">Rank</b></font></td>
                <td align="center" width ="86%" colspan ="2"> <b><font face="Verdana" color="orange">Robosoccer</b></font></td>
                
	</thead
        <tr><td align="center" width ="14%"><b></b></td>
<td align="center" width ="43%"><b>Teamname</b></td>
            <td align="center" width ="43%"><b>Score</b></td>
            
       </tr>
<?php
  // Get all the usernames from the database and allow user to choose one
  $s = mysql_query("SELECT * FROM teamdata where team <> '' order by rsscore desc");
  
  for ($x = 0; $x < 5 && $x < mysql_num_rows($s); $x++) 
  {
          $teamname1= mysql_result($s,$x,0);
          $sc1= mysql_result($s,$x,10);
	  
?>
           <tr><td align="center" width="14%"><?php echo $x+1 ; ?><td align="center" width ="43%"><?php echo"<a href='teamdetails.php?team=$teamname1'>$teamname1</a><td align='center' width ='43%'>$sc1";?></td></tr>
<?php
    }
?>
        
</table>
<!----------------------- -->
<br/><br/><br/>
<!----------------------- -->
<table border="1"  id="table5" width="54%" border="border">
        <thead>
                <td align="center" width ="13%" colspan ="1"> <b><font face="Verdana" color="orange">Rank</b></font></td>
                <td align="center" width ="86%" colspan ="2"> <b><font face="Verdana" color="orange">LineFollower</b></font></td>
                
	</thead
        <tr><td align="center" width ="14%"><b></b></td>
<td align="center" width ="43%"><b>Teamname</b></td>
            <td align="center" width ="43%"><b>Score</b></td>
            
       </tr>
<?php
  // Get all the usernames from the database and allow user to choose one
  $s = mysql_query("SELECT * FROM teamdata where team <> '' order by lfscore desc");
  
  for ($x = 0; $x < 5 && $x < mysql_num_rows($s); $x++) 
  {
          $teamname1= mysql_result($s,$x,0);
          $sc1= mysql_result($s,$x,11);
	  
?>
           <tr><td align="center" width="14%"><?php echo $x+1 ; ?><td align="center" width ="43%"><?php echo"<a href='teamdetails.php?team=$teamname1'>$teamname1</a><td align='center' width ='43%'>$sc1";?></td></tr>
<?php
    }
?>
        
</table>
<!----------------------- -->
<br/><br/><br/>
<hr>
Click On The Teamname To View Details
<?php
     
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