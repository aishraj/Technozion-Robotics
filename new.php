<html>
<head>
<style>
.dynamicpos{position: relative; top: -75px; left: 0px;}   
</style>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Create New User</title>
</head>

<?php

  $time = time();
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

 include("pfile.php");
  include("home.php");
              login($key);   
?>
<body>
<div class="dynamicpos">
<br>
<b><center><font face="Verdana">New Team</font></b><hr></center></p>
<form action="createnew.php" method="POST">
<table border="0" width="100%" id="table1" height="321">
        <tr>
                <td width="100">&nbsp;</td>
                <td width="144"><font face="Verdana"><b>Team Name:</b></font></td>
                <td> <input type="text" name="team" maxlength="20"/></td>
        </tr>
		
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
        <tr>
                <td width="100">&nbsp;</td>
                <td width="144"><font face="Verdana">Member 1:</font></td>
                <td> <input type="text" name="s1"  /></td>
<td width="144"><font face="Verdana">College :</font></td>
                <td> <input type="text" name="c1" maxlength="50" /></td>
        </tr>
      <tr>
                <td width="100">&nbsp;</td>
                <td width="144"><font face="Verdana">Member 2:</font></td>
                <td> <input type="text" name="s2" /></td>
<td width="144"><font face="Verdana">College :</font></td>
                <td> <input type="text" name="c2" maxlength="50" /></td>
        </tr>
        <tr>
                <td width="100">&nbsp;</td>
                <td width="144"><font face="Verdana">Member 3:</font></td>
                <td> <input type="text" name="s3" /></td>
<td width="144"><font face="Verdana">College :</font></td>
                <td> <input type="text" name="c3" maxlength="50" /></td>
        </tr>
        <tr>
                <td width="100">&nbsp;</td>
                <td width="144"><font face="Verdana">Member 4:</font></td>
                <td> <input type="text" name="s4" /></td>
<td width="144"><font face="Verdana">College :</font></td>
                <td> <input type="text" name="c4" maxlength="50" /></td>
        </tr>
		 <tr>
                <td width="100">&nbsp;</td>
                <td width="144"><font face="Verdana">Member 5:</font></td>
                <td> <input type="text" name="s5" /></td>
<td width="144"><font face="Verdana">College :</font></td>
                <td> <input type="text" name="c5" maxlength="50" /></td>
        </tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
        <tr>
                <td width="100">&nbsp;</td>
                <td width="144"><font face="Verdana">Mobile 1:</font></td>
                <td> <input type="text" name="mob1" /></td>
        </tr>
        <tr>
                <td width="100">&nbsp;</td>
                <td width="144"><font face="Verdana">Mobile 2:</font></td>
                <td> <input type="text" name="mob2" /></td>
        </tr>
        <tr>
                <td width="100" height="44">&nbsp;</td>
                <td width="144" height="44">&nbsp;</td>
                <td height="44"> <input type="submit" value="Create Team">
 <input type="reset" value="Reset"></td>
        </tr>
		
		<!-- Event Check Box -->
		
		<tr>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		|<input type="checkbox" name="ismc" value="true" /> Mobile Control |
		</tr>
		<tr>
		|<input type="checkbox" name="isrw" value="true" /> Robo wars |
		</tr>
		<tr>
		|<input type="checkbox" name="isrs" value="true" /> Robo Soccer| 
		</tr>
		<tr>
		|<input type="checkbox" name="islf" value="true" /> Line Follower|
		</tr>
		

        </table>
</form>

  <?php
}}
?>

</body>
</html>