<?php
session_start();

$podatki = $_SESSION["igralci"];
arsort($podatki);

$jeDrugi=false;

$imena = array_keys($podatki);
?>
<html>
<head>
	<link href="css/stil.css" rel="stylesheet" type="text/css" media="all"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/png" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="firewrks.js"></script>
	<title>Igralnica</title>
</head>
<body>
	<div id="container">
		<div id="glava">
			<div id="title"><h1>Igralnica</h1></div>
			<div class="clear"></div>
		</div>
		<div id="main"><font style="font-size: 50px;">
				
				</font>
				<table style="margin: 0 auto;">
					<tr>
<td><center><font style="font-size: 50px; color: #ffffff;"><?php echo $imena[1] . " = " . $podatki[$imena[1]]. "" ; ?></font></center></td>
<td><center><font style="font-size: 50px; color: #ffffff;"><?php echo $imena[0] . " = " . $podatki[$imena[0]]. "" ; ?></font></center></td>
<td><center><font style="font-size: 50px; color: #ffffff;"><?php echo $imena[2] . " = " . $podatki[$imena[2]]. "" ; ?></font></center></td>

					</tr>
				
					
					
					<tr>
						<td><center><?php 
						if($podatki[$imena[0]]==$podatki[$imena[1]]){
							echo "<img src=\"slike/trophy.png\">";
							$jeDrugi=true;
						}else{
							echo "<img src=\"slike/medal2.png\">";
						}
							
						?></center></td>
						<td><center><img src="slike/trophy.png" style="margin: 0 0 15px 0;"/></center></td>
						<td><center><?php 
						if($podatki[$imena[1]]==$podatki[$imena[2]]||$jeDrugi==true){
							echo "<img src=\"slike/medal2.png\">";
						}else{
							echo "<img src=\"slike/medal3.png\">";
						}
							
						?></center></td>
					</tr>
				</table>
				<form action="index.php" method="POST">
					<center><input type="submit" style="margin: 10px; width: 350px;" name="newPlayers" value="Igraj Ponovno"/></center>
				</form>
		</div>
	</div>
	<script>setTimeout(function(){window.location.href='index.php'},10000);</script>
	
</body>
</html> 