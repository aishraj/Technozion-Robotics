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
  	$team1 = $_POST["team"];  
	 $s11 = $_POST["s1"];  
 	 $s21 = $_POST["s2"];      
 	 $s31 =  $_POST["s3"];        
	  $s41 = $_POST["s4"];  
	$s51 = $_POST["s5"]; 	  
 	 $mob11 = $_POST["mob1"];     
	  $mob21 = $_POST["mob2"];        
	  $mcscore1 = $_POST["mcscore"];  
	  $rwscore1 = $_POST["rwscore"];
	  $rsscore1= $_POST["rsscore"];  
	$lfscore1= $_POST["lfscore"];  	  
     
	 $selectteam = $_POST["selectteam"];

          // Get details of user from Database and put them in variables
          $query = mysql_query("SELECT * FROM teamdata WHERE team = '$selectteam'");
      $team = mysql_result($query,0,0);         
      $s1 = mysql_result($query,0,1);      
      $s2 = mysql_result($query,0,2);      
      $s3 = mysql_result($query,0,3);       
      $s4 = mysql_result($query,0,4);  
	$s5 = mysql_result($query,0,5); 
      $mob1 = mysql_result($query,0,6);        
      $mob2 = mysql_result($query,0,7);        
      $mcscore= mysql_result($query,0,8);  
      $rwscore = mysql_result($query,0,9);   
	$rsscore= mysql_result($query,0,10);
	$lfscore= mysql_result($query,0,11);
	
      $c11 = mysql_result($query,0,12);      
      $c21 = mysql_result($query,0,13);      
      $c31 = mysql_result($query,0,14);       
      $c41 = mysql_result($query,0,15);    
	  $c51 = mysql_result($query,0,16);   
	  
	  
          // Compare variables and update new variables to database if changed
          $changeteam = strcmp($team1,$team);
          $changes1 = strcmp($s11,$s1);
          $changes2 = strcmp($s21,$s2);
          $changes3 = strcmp($s31,$s3);
          $changes4 = strcmp($s41,$s4);
		  $changes5 = strcmp($s51,$s5);
		  
          $changemob1 = strcmp($mob11,$mob1);
          $changemob2 = strcmp($mob21,$mob2);
		  
          $changemcscore = strcmp($mcscore1,$mcscore);
	      $changerwscore = strcmp($rwscore1,$rwscore);
	      $changersscore= strcmp($rsscore1,$rsscore);
		  $changelfscore= strcmp($lfscore1,$lfscore);
	
          // Update new Variables to database if they are not 0 which means they changed
          echo "<center>";
          
          if ($changes1 != 0) { 
              mysql_query ("UPDATE teamdata SET s1 = '$s11' WHERE team = '$selectteam'");
              
          }
          if ($changes2 != 0) { 
              mysql_query ("UPDATE teamdata SET s2 = '$s21' WHERE team = '$selectteam'");
              
          }
          if ($changes3 != 0) { 
              mysql_query ("UPDATE teamdata SET s3 = '$s31' WHERE team = '$selectteam'");
             
          }
          if ($changes4 != 0) {
              mysql_query ("UPDATE teamdata SET s4 = '$s41' WHERE team = '$selectteam'");
              
          }
		  if ($changes5 != 0) {
              mysql_query ("UPDATE teamdata SET s5 = '$s51' WHERE team = '$selectteam'");
              
          }
		  
          if ($changemob1 != 0) {
              mysql_query ("UPDATE teamdata SET mob1 = '$mob11' WHERE team = '$selectteam'");
             
          }
          if ($changemob2 != 0) { 
              mysql_query ("UPDATE teamdata SET mob2 = '$mob21' WHERE team = '$selectteam'");
             
          }
          if ($changemcscore != 0) {
              mysql_query ("UPDATE teamdata SET mcscore = '$mcscore1' WHERE team = '$selectteam'");
              
          }
          if ($changerwscore != 0) 
		  {
              mysql_query ("UPDATE teamdata SET rwscore = '$rwscore1' WHERE team = '$selectteam'");
              
          }
		if ($changersscore !=0)
		{
			mysql_query ("UPDATE teamdata SET rsscore = '$rsscore1' WHERE team = '$selectteam'");
		}
		if ($changelfscore !=0)
		{
			mysql_query ("UPDATE teamdata SET lfscore = '$lfscore1' WHERE team = '$selectteam'");
		}
	
          if ($changeteam != 0) { 
              // Insert new value to database
              mysql_query ("UPDATE teamdata SET team = '$team1' WHERE team = '$selectteam'");
              
          }
          echo "</center>";

          // Make the table displaying details of user
             echo "<div class='dynamicpos'>
       <table border='0' width='100%' id='table1'>
	

        <tr>
                
                <td width='25%' ><b><font face='Tahoma'>Team:</b></td>
                <td width='25%'> <font face='Tahoma'>$team1 </font></td>
        </tr>
<tr></tr><tr></tr><tr></tr><tr><tr></tr><tr></tr><tr></tr>
<tr>
                
                <td width='100%' colspan = '4'><b><font face='Verdana'>Members</font></b></td>
                
        </tr>
        <tr>
                
                <td width='25%'><font face='Tahoma'>Member 1:</td>
                <td width='25%'> <font face='Tahoma'>$s11 </font></td>
 <td width='25%'><font face='Tahoma'> from </td>
                <td width='25%'> <font face='Tahoma'>$c11 </font></td>
        </tr>
        <tr>
                
                <td width='25%'><font face='Tahoma'>Member 2:</td>
                <td width='25%'> <font face='Tahoma'>$s21 </font></td>
<td width='25%'><font face='Tahoma'> from </td>
                <td width='25%'> <font face='Tahoma'>$c21 </font></td>
        </tr>
        <tr>
               
                <td width='25%'><font face='Tahoma'>Member 3:</td>
                <td width='25%'> <font face='Tahoma'>$s31 </font></td>
<td width='25%'><font face='Tahoma'> from </td>
                <td width='25%'> <font face='Tahoma'>$c31 </font></td>        
</tr>
		 <tr>
               
                <td width='25%'><font face='Tahoma'>Member 4:</td>
                <td width='25%'> <font face='Tahoma'>$s41 </font></td>
<td width='25%'><font face='Tahoma'> from </td>
                <td width='25%'> <font face='Tahoma'>$c41 </font></td>        
</tr>

        <tr>
                <td width='25%'><font face='Tahoma'>Member 5:</td>
                <td width='25%'> <font face='Tahoma'>$s51 </font></td>
<td width='25%'><font face='Tahoma'> from </td>
                <td width='25%'><font face='Tahoma'>$c51 </font></td>     
   </tr><tr></tr><tr></tr><tr></tr><tr><tr></tr><tr></tr><tr></tr>
        <tr>
                
                <td width='25%'><font face='Tahoma'>Mobile 1:</td>
                <td width='25%'> <font face='Tahoma'>$mob11 </font></td>
</tr>
        <tr>
                
                <td width='25%'><font face='Tahoma'>Mobile 2:</td>
                <td width='25%'> <font face='Tahoma'>$mob21 </font></td>
   </tr><tr></tr><tr></tr><tr></tr><tr><tr></tr><tr></tr><tr></tr>
        <tr>
                
                <td width='25%'><font face='Tahoma'>Mobile Control Score:</td>
                <td width='25%'> <font face='Tahoma'>$mcscore1 </font></td>
</tr>
        <tr>
                
                <td width='25%'><font face='Tahoma'>Robo Wars Score:</td>
                <td width='25%'> <font face='Tahoma'>$rwscore1 </font> </td>

        </tr>
         
	</tr><tr></tr><tr></tr><tr></tr><tr><tr></tr><tr></tr><tr></tr>

	<tr>
                
                <td width='25%'><font face='Tahoma'>Robosoccer Score:</td>
                <td width='25%'> <font face='Tahoma'>$rsscore1 </font></td>
</tr>

	 <tr>
                
                <td width='25%'><font face='Tahoma'>Line Follower Score:</td>
                <td width='25%'> <font face='Tahoma'>$lfscore1 </font> </td>

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