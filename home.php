<?php

function init()
{

	$usercount = mysql_query("SELECT * FROM teamdata");
	
	
	/*Total Register team for event x*/
	$reg_mc = mysql_query("SELECT * FROM teamdata where ismc='true'");
	$reg_rw = mysql_query("SELECT * FROM teamdata where isrw='true'");
	$reg_rs = mysql_query("SELECT * FROM teamdata where isrs='true'");
	$reg_lf = mysql_query("SELECT * FROM teamdata where islf='true'");
	
	$reg_mc_cnt=mysql_num_rows($reg_mc);
	$reg_rw_cnt=mysql_num_rows($reg_rw);
	$reg_rs_cnt=mysql_num_rows($reg_rs);
	$reg_lf_cnt=mysql_num_rows($reg_lf);
	
	
	$scount = mysql_query("SELECT * FROM teamdata where mcscore>0  AND ismc='true'");
	$dcount = mysql_query("SELECT * FROM teamdata where rwscore>0  AND isrw='true'");
	$rcount = mysql_query("SELECT * FROM teamdata where rsscore>0  AND isrs='true'");
	$lcount = mysql_query("SELECT * FROM teamdata where lfscore>0  AND islf='true'");
	$noofusers=mysql_num_rows($usercount);
	
	$noofs = mysql_num_rows($scount);
	$noofd = mysql_num_rows($dcount);
	$noofr = mysql_num_rows($rcount);
	$noolf = mysql_num_rows($lcount);
	
	
	
	$sr=mysql_num_rows($reg_mc)-$noofs;
	$dr=mysql_num_rows($reg_rw)-$noofd;
	$rs=mysql_num_rows($reg_rs)-$noofr; 
	$lf=mysql_num_rows($reg_lf)-$noolf;
	
	
	
	echo "<div class='dynamicpos'><h3><b><hr><br/>
	Total Teams                        : $noofusers<br>
	
	Teams registered for Mobile Control:$reg_mc_cnt<br>
	Teams registered for   RoboWar : $reg_rw_cnt<br>
	Teams registered for  Robosoccer   : $reg_rs_cnt<br>
	Teams registered for LineFollower : $reg_lf_cnt<br>
	<br/><br/>
	
	Teams Participated in Mobile Control:$noofs<br>
	Teams Participated in Robowars     : $noofd<br>
	Teams Participated in Robosoccer   : $noofr<br>
	Teams Participated in LineFollower : $noolf<br>
	
	<br>
	Teams yet to Participate in  Mobile Control: $sr<br>
	Teams yet to Participate in  Robowars     : $dr<br> 
	Teams yet to Participate in Robosoccer   : $rs<br> 
	Teams yet to Participate in LineFollower   : $lf<br> 
	<br><a href='remaining.php'>Click Here to Update Remaining Teams OR Teams Yet To Participate</a></b></h3>               ";
	
echo "<div class='dynamicpos'><h3><b>
<hr><br><br><br><form action='search.php' method='POST'><center>SEARCH&nbsp;&nbsp;&nbsp;<input type='text' size='15' name='key'>&nbsp;&nbsp;<input type='submit' value='Go'>";


echo"<br><br><br><br></center>STATS<hr><table width='20%' cellpadding='0' cellspacing='0'><tr><td width='10\%' align='left'><b>Mobile Control : $noofs/$reg_mc_cnt</td><tr><td width='10\%' align='center'><b>RoboWars : $noofd/$reg_rw_cnt &nbsp;&nbsp;</td><tr><td width='10\%' align='right'><b>Robosoccer : $noofr/$reg_rs_cnt &nbsp;&nbsp;</td><tr><td width='10\%' align='right'><b>LineFollower : $noolf/$reg_lf_cnt &nbsp;&nbsp;</td></tr></table></b>"; 

}
include("connect.php");


?>

<html>
<head>
<script>
	
</script>
<style>

    
</style>

<LINK REL=StyleSheet HREF="style.css" TYPE="text/css" MEDIA=screen>
</head>
<body bgcolor="black" class="text" alink="cyan" vlink="cyan">


<p align="left">
<img src="./resources/head.jpg" width="100%">
<img src="./resources/head1.jpg" width="100%">
<div class="menu"><table><tr align="right"><td><h2><a href="login.php">Home</a></td>


<?php
function login($pass) 
{
      
    include("pfile.php");
    if ($pass == $key)
    {
?>
		<td width="100px"><h2><a href="update.php">Update</a>
		<td width="135px"><h2><a href="new.php">NewTeam</a>
		<td width="130px"><h2><a href="rank.php">Rankings</a>
		<td width="200px"><h2><a href="logout.php">Logout</a></table>
		</h2>
		</div>
		<img src="./resources/head2.jpg" width="100%" class="menud">

<?php
   
	}	

	 
}
?>

</body>
</html>
