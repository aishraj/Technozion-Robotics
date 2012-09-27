<html>
<head>
<script language="javascript">
<!-- Begin Hiding Javascript
function rel()
{
document.data.reset();
history.go(0);
}
function calc()
{

	/*
	A maximum time of 5 minutes is allowed for a robot to complete the course. A robot that cannot complete the course in the allotted time shall be disqualified.
	The track is divided into checkpoints at various locations. A team will be awarded 20 points on crossing a checkpoint.
	A maximum of 4 corrections are allowed. For every next correction the team will be deducted with 5 points.
	On completion of the whole track in given time, the team is given 40 points.
	For teams which complete within 5 minutes extra points will be given as of (5-t)*20.
	Extra 40 points will be awarded for a bot built with a self made design rather than a commercially complete robotic-systems which are sold ready for the purpose of the competition is not allowed.
	The organizers reserve the right to change any or all of the rules as they deem fit.
	Violation of any of the rules will lead to disqualification. Judges' decision shall be treated as final and binding on all.
	The teams may be asked questions on the design of the circuit and other details on the implementation.
	*/

	var ttaken_flt,total_scr;
	var FIVE=parseFloat(5);
	var cpt_int,touches_int,whole_int,selfmade_int,extra_int,whole_status,selfmade_status;
	
	whole_status=parseInt(0);
	selfmade_status=parseInt(0);
	
	if(document.getElementById('whole1').checked)
	{
		whole_status=parseInt(1);
	}
	if(document.getElementById('selfmade1').checked)
	{
		selfmade_status=parseInt(1);
	}
	
	
	if (document.data.ttaken.value=="")
	ttaken_flt=parseFloat(0);
	else
	ttaken_flt=parseFloat(document.data.ttaken.value);

	
	if (document.data.cpt.value=="")
	cpt_int=parseInt(0);
	else
	cpt_int=parseInt(document.data.cpt.value); 

	if (document.data.touches.value=="")
	touches_int=parseInt(0);
	else
	touches_int=parseInt(document.data.touches.value); 
	
	
	whole_int=whole_status;
	selfmade_int=selfmade_status;
	//if(ttaken_int<=FIVE)
	//{
		total_scr=parseInt(20)*cpt_int;
		//alert("After Check Point"+total_scr);
		
		if(touches_int>parseInt(4))
		{
			total_scr=total_scr-((touches_int-4)*5);
			//alert("Touches > 4 ka andar "+total_scr);
			
		}
		
		//If whole completed is Yes
		if(whole_int==parseInt(1))
		{
			total_scr=total_scr+(40);
			//alert("whole completed "+total_scr);
			
		}
		if(ttaken_flt<FIVE)
		{
			total_scr=total_scr+((FIVE-ttaken_flt)*parseFloat(20));
			//alert("Ttaken <5 ka andar "+total_scr);
		}
		if(selfmade_int==parseInt(1))
		{
			total_scr=total_scr+(40);
			//alert("Self made ka andar"+total_scr);
		}
	//}
	document.getElementById("time").innerHTML = tot_scr;
	alert(tot_scr);
//-->
}
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
     .ll1{ position:relative;top:-11px;left:0px;}
  .ll{ position:relative;top:-1px;left:0px;}
.absi{ position:relative;top:-1px;left:1px;}
       .absi2 { position:relative; left:1px; top:2px}
     .coim{ position:relative;top: -1px; left:-2px;}
</style>
</head>
<body bgcolor="black" font="calibri">
<a href="scalc.php"><font color="#00FF00" size="4">Mobile Control</font>
</a>&nbsp;&nbsp;&nbsp;
<a href="rwcalc.php"><font color="RED" size="4">RoboWars</font>
</a>&nbsp;&nbsp;&nbsp;
<a href="rscalc.php"><font color="RED" size="4">Robosoccer</font>
</a>
<a href="lfcalc.php"><font color="#00FF00" size="4">Line Follower</font>
</a>&nbsp;&nbsp;&nbsp;





<img src="./resources/timer1.jpg" height="100" width="337">
<div  id="time" class="tab"> </div>

<table class="absol4" ><tr><td>
      <img src = "./resources/abovelink2.jpg" width="337" height="60"  ><div class="absol7">
	</div></td></tr></table>
    	<div class = "absol3">
<br>
<form name="data" onSubmit="javascript:calc()">

<table class="ll1"><tr>
			<td width="50px"><div id="llink"class="ll" style="width:50px">
			<img src ="./resources/leftlink1.jpg"  onClick="object.forIE()" width="51" height="220"></div>
			</td>
			<td>
			<TABLE width="238px" bgcolor="grey">
			<tr>
			<td><font color="#DDFFFF">
			Time Taken &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="4" value="" name="ttaken"></font>
			</tr>
<tr></tr>

			<TR> 
			<TD><font color="#DDFFFF">
			No of CheckPoints &nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name="cpt" value="" size="4">
			</TD>
			</TR>
			<TR> 
			<TD><font color="#DDFFFF">
			Number of  Touches &nbsp;&nbsp;&nbsp;<input type = "text" name="touches" value="" size="4">
			</TD>
			</TR>
			<TR> 
			<TD><font color="#DDFFFF">
			Whole Completed &nbsp;
			<input type="radio" name="whole" id="whole1">Yes|
			<input type="radio" name="whole" id="whole0">No
			
			</TD>
			</tr>
			<tr>
			<TD><font color="#DDFFFF">
			Is the Bot Selfmade &nbsp;
			<input type="radio" name="selfmade" id="selfmade1">Yes|
			<input type="radio" name="selfmade" id="selfmade0">No
			
			</TD>
			
			
			
			</TR>
<tr></tr>
			
<tr></tr>
			
<tr></tr>
			
<tr></tr><tr></tr>
			
<tr></tr><tr></tr>	
		<tr>
			<td>
                         <center>
<!-- ***************************************************************************************** -->
<input type="button" name="cal" value="&nbsp;&nbsp;&nbsp;&nbsp;Calculate&nbsp;&nbsp;&nbsp;&nbsp;" onclick="javascript:calc()">&nbsp;&nbsp;&nbsp;&nbsp;<form name="res" onSubmit="javascript:rel()"><input type="button" name="res" onclick="javascript:rel()" value="Reset"></form></center></form>
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