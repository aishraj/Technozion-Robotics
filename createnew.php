<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Team Registration</title>
</head>

<?php

  $time = time();
  if (!isset($_COOKIE['cookie_info'])) 
  {
      echo "Cannot access this page: You aren't logged in";
      exit;
  }

  // If there is a cookie, validate the cookie
  else 
  {

      // Use Connect Script
      include("connect.php");

      // Include the validation of user file
      include("validateuser.php");

      // If user and password are correct
      if (validateuser() == true) {
 include("pfile.php");
  include("home.php");
              login($key); 


  // Variables that data come from the submission form
  $team = $_POST["team"];     
  $s1 = $_POST["s1"];  
  $s2 = $_POST["s2"];      
  $s3 =  $_POST["s3"];        
  $s4 = $_POST["s4"];    
  $s5 = $_POST["s5"];    
  $mob1 = $_POST["mob1"];     
  $mob2 = $_POST["mob2"];
  
  $ismc='false';
  $isrw='false';
  $isrs='false';
  $islf='false';
  
  if(isset($_POST['ismc']))
	$ismc=$_POST['ismc'];

  if(isset($_POST['isrw']))
	$isrw=$_POST['isrw'];
  
  if(isset($_POST['isrs']))
	$isrs=$_POST['isrs'];
  
  if(isset($_POST['islf']))
	$islf=$_POST['islf'];
	
  $mcscore = 0;  
  $rwscore = 0;
  $rsscore = 0;     
  $lfscore = 0; 
  $c1 = $_POST["c1"];  
  $c2 = $_POST["c2"];      
  $c3 =  $_POST["c3"];        
  $c4 = $_POST["c4"]; 
  $c5 = $_POST["c5"]; 
   


  

  /* Check if username exists. If not then add all data to the database.
  If so then ask user for another name to try. */

  // MD5 Username and Password
//  $username = MD5($username);
//$pass=$password;
  //$password = MD5($password);

  // Check if the username exists

  $usernameinuse = mysql_query("SELECT * FROM teamdata WHERE team = '$team'");
  $isusernameinuse = mysql_num_rows($usernameinuse);

  // If username exists then print error message and exit script
  if (! $team) {
      echo "<center>Please Enter The Team Name</center>";
      exit;
  }
if ($isusernameinuse <> 0) {
      echo "The teamname you selected is already been used by another group.<BR>Go back and select a new teamname";
      exit;
  }

  else {

      // Find out how many users there are so that you can determine the next user number
  //    $usercount = mysql_query("SELECT * FROM userdata");
    //  $noofusers = mysql_num_rows($usercount);

      // New user number = User number + 1
    //  $usernumber = $noofusers + 1;

      // Insert the new user to the database since everything is fine
	 mysql_query("INSERT INTO teamdata VALUES ('$team','$s1','$s2','$s3','$s4','$s5','$mob1','$mob2','$mcscore','$rwscore','$rsscore','$lfscore','$c1','$c2','$c3','$c4','$c5','$ismc','$isrw','$isrs','$islf')");

      // Print Successful Creation of user message
      echo "<font face='Verdana'>Team " . $team . " has been created successfully.";

  }
  
     // If user and password are not correct print error message
    
    
  echo "</center>";
}}
?>
<BR>
<BR>
<BR>
<BR>

</body>
</html>