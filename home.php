<?php

function init()
{

$usercount = mysql_query("SELECT * FROM teamdata");
	$scount = mysql_query("SELECT * FROM teamdata where sscore not like '0'");
$dcount = mysql_query("SELECT * FROM teamdata where dscore not like '0'");
$rcount = mysql_query("SELECT * FROM teamdata where rsscore not like '0'");
      $noofusers = mysql_num_rows($usercount);
$noofs = mysql_num_rows($scount);
$noofd = mysql_num_rows($dcount);
$noofr = mysql_num_rows($rcount);
$sr=$noofusers-$noofs;
$dr=$noofusers-$noofd;
$rs=$noofusers-$noofr; 
/*
echo "<div class='dynamicpos'><h3><b>
<hr><br>
Total Teams                        : $noofusers<br>
Teams Participated in Solar System : $noofs<br>
Teams Participated in Dockyard     : $noofd<br>
Teams Participated in robosoccer   : $noofr<br>

<br>
Teams yet to Participate in Solar System : $sr<br>
Teams yet to Participate in Dockyard     : $dr<br> 
Teams yet to Participate in Robosoccer   : $rs<br> 
<br><a href='remaining.php'>Click Here to Update Remaining Teams OR Teams Yet To Participate</a></b></h3>               
";
*/
echo "<div class='dynamicpos'><h3><b>
<hr><br><br><br><form action='search.php' method='POST'><center>SEARCH&nbsp;&nbsp;&nbsp;<input type='text' size='15' name='key'>&nbsp;&nbsp;<input type='submit' value='Go'>";


echo"<br><br><br><br></center>STATS<hr><table width='100%' cellpadding='0' cellspacing='0'><tr><td width='25\%' align='left'><b>SolarSystem : $noofs/$noofusers</td><tr><td width='25\%' align='center'><b>Dockyard : $noofd/$noofusers&nbsp;&nbsp;</td><tr><td width='25\%' align='right'><b>Robosoccer : $noofr/$noofusers&nbsp;&nbsp;</td></table></b>"; 

}
include("connect.php");


?>

<html>
<head>
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
