

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

              

               $key = $_POST["key"]; // team selected to modify
?>
<div class="dynamicpos">



<?php
 
  // If there was a staff to modify selected
  if ($key) {

      // Get details of user from Database and put them in variables
     $query = mysql_query("SELECT * FROM teamdata WHERE team like '%$key%' or s1 like '%$key%' or s2 like '%$key%' or s3 like '%$key%'or s4 like '%$key%'or mob1 like '%$key%' or mob2 like '%$key%'");
	$no = mysql_num_rows($query);
	if($no)
	{
		echo"<table width='100%' cellpadding='0' cellspacing='0'><tr><td width='50\%' align='left'><h2><b>Search Results :<font color='orange'> $key</font></td><td width='50\%' align='right'><h2><b>1-$no of $no&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></table></b>";  
		for ($x = 0; $x < $no; $x++) 
		{
          		$teamname1= mysql_result($query,$x,0);
			$s1= mysql_result($query,$x,1);
			$s2= mysql_result($query,$x,2);
			$s3= mysql_result($query,$x,3);
			$s4= mysql_result($query,$x,4);
			echo"<a href = 'teamdetails.php?team=$teamname1'>$teamname1</a><br></b><font size='2'>$s1, $s2, $s3, $s4 </font><br><br>"; 	
		}
	
	}
	else
	{
		echo"<b><h3>Your search - $key - did not match any items.";
	}		    				
     
     

  }

      // If user and password are not correct print error message
      }
      else {
          echo "Incorrect username/password";
          exit;
      }
  }

?>


</body>
</html>