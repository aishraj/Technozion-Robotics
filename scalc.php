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

var tb,mb,tr,bp,py,scr;
var cpt_int,rnk_int,crt_int,total_scr;

	if (document.data.cpt.value=="")
	cpt_int=parseInt(0);
	else
	cpt_int=parseInt(document.data.cpt.value);


	if (document.data.crt.value=="")
	crt_int=parseInt(0);
	else
	crt_int=parseInt(document.data.crt.value);
			
	if (document.data.rnk.value=="")
	rnk_int=parseInt(0);
	else
	rnk_int=parseInt(document.data.rnk.value); 	
	
	tot_scr=(cpt_int*20);
	if(crt_int>3)
	{
		tot_scr=tot_scr-(5*(crt_int-3));
	}
	if(rnk_int==1)
	{
		tot_scr=tot_scr+50;
	}
	//mb=parseInt((tb/5)*(tr));
	//scr= parseInt((bp)+(mb));
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
			Number Of CheckPoints &nbsp;&nbsp;<input type="text" size="4" value="" name="cpt"></font>
			</tr>
<tr></tr>

			<TR> 
			<TD><font color="#DDFFFF">
			No Of Corrections &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name="crt" value="" size="4">
			</TD>
			</TR>
<tr></tr>
			
<tr></tr>
			<tr>
			<td><font color="#DDFFFF">
			Rank&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "text" name="rnk" value="" size="4"></td>
			</tr>
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