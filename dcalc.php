
<html>
<head>
<script language="javascript">

function rel()
{
document.data.reset();

history.go(0);
}

	
	//document.getElementById("time").innerHTML = scr;

</script>
<style>
a.image         {text-decoration: none; background-color: transparent; border=0}
a.image:hover   {text-decoration: none; background-color: transparent; border=0}
font{
	 
	FONT-FAMILY: Calibri,Helvetica, sans-serif;}
    .absol3 {position: relative; top: -20px; left: -4px;}
    .absol4 {position: relative; top: -6px; left: -4px;}
    .absol5 {position: relative; top: -20px; left:-1px;}
     .absol7{position:relative; left:223px; top:-50px;}
     .absol7{position:relative; left:223px; top:-50px;}

.tab{ position:relative; left: 140px; top:-65px; font-size: x-large;COLOR: #00FF00;}
.tab2{ position:relative; left: 85px; top:-408px; font-size: x-large;COLOR: #00FF00;}
     .ll1{ position:relative;top:-11px;left:0px;}
  .ll{ position:relative;top:-1px;left:0px;}
.absi{ position:relative;top:-1px;left:1px;}
       .absi2 { position:relative; left:1px; top:2px}
     .coim{ position:relative;top: -1px; left:-2px;}
</style>
</head>
<body bgcolor="black" font="calibri">
<a href="scalc.php"><font color="RED" size="4">Micromouse</font>
</a>&nbsp;&nbsp;&nbsp;
<a href="dcalc.php"><font color="#00FF00" size="4">Hurt Locker</font>
</a>&nbsp;&nbsp;&nbsp;
<a href="rscalc.php"><font color="RED" size="4">Robosoccer</font>
</a>



<img src="./resources/timer1.jpg" height="100" width="337">
<div  id="time" class="tab"> </div>

<table class="absol4" ><tr><td>
      <img src = "./resources/abovelink2.jpg" width="337" height="60"  ><div class="absol7">
	</div></td></tr></table>
    	<div class = "absol3">
<br>
<form name="data" action="dcalc.php" method="POST">

<table class="ll1"><tr>
			<td width="50px"><div id="llink"class="ll" style="width:50px">
			<img src ="./resources/leftlink1.jpg"  onClick="object.forIE()" width="51" height="220"></div>
			</td>
			<td>
			<TABLE width="238px" bgcolor="grey">
			<TR> 
			<TD><font color="#DDFFFF">
			No. of bombs picked &nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name="n1" value="" size="4">
			</TD>
			</TR>
<tr></tr>
			<TR> 
			<TD><font color="#DDFFFF">
			No. of faults &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name="f1" value="" size="4"></TD>
			</TR>
<tr></tr>
			
<tr></tr>
			<TR> 
			<TD><font color="#DDFFFF">
			No. of bombs off landed at destination &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;<input type = "text" name="n2" value="" size="4"></TD>
			</TR>
<tr></tr><tr></tr>
			
<tr></tr><tr></tr>	
		<tr>
			<td>
                         <center>
<!-- ***************************************************************************************** -->
<input type="submit" name="cal" value="&nbsp;&nbsp;&nbsp;&nbsp;Calculate&nbsp;&nbsp;&nbsp;&nbsp;" onclick="javascript:calc()">&nbsp;&nbsp;&nbsp;&nbsp;<form name="res" onSubmit="javascript:rel()"><input type="button" name="res" onclick="javascript:rel()" value="Reset"></form></center></form>
<!-- ***************************************************************************************** -->     
			</td>
			</tr>
<tr></tr><tr></tr>
			<tr>
			<td>
			</td>
			</tr>

			</table>

		</td>
		<td><div class="coim" id="comn">
		<img src = "./resources/combined1.jpg" width="41" height="220" >
			
		  <td>			</td>
			</tr></table>
		<div>
		<table class="absol5">
			<tr>
				
				<td><div class="absi">
                  <img src = 	"./resources/endingbox1.jpg" width="333" height="46" ></div></td>
				
			</tr>
		</table>
</body>
</html>
<?php

  
  $n1 = $_POST["n1"];

  $f1 = $_POST["f1"];
  
  $n2 = $_POST["n2"]; 	 
  

if ($n1||$f1||$n2) {
	echo "<div id='score' class='tab2'>";
	
        if ($n1=="")
	$n1=0;
	if ($f1 =="")
	$f1=0;
	if ($n2 =="")
	$n2=0;
	
	$p=(3*$n1)+(10*$n2);
	
	$scr=$p-$f1;
	
	echo "$scr </div>";

	}	


?>	



