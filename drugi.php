<?php
session_start();
if (!isset($_SESSION["igralci"]) || count($_SESSION["igralci"]) !== 3) {
	header("Location: index.php");
	exit();
}

if (isset($_POST["met"])) {

	if($_SESSION["Vrsta"]>3){	
		$_SESSION["metGlavni"]=$_SESSION["metGlavni"]+1;
		$_SESSION["Vrsta"]=1;
}
	
	if ($_SESSION["metGlavni"]>$_SESSION["stM"]){
		header("Location: tretji.php");
		exit();
	}
}

$podatki = $_SESSION["igralci"];
$imena = array_keys($_SESSION["igralci"]);

?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/stil.css" rel="stylesheet" type="text/css" media="all"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Igralnica</title>
</head>
<body>
	<div id="container">
	
		<div id="glava">
			
			<div class="clear"></div>
		</div>
		
		<div id="index1">
			<div class="clear"></div>
			<div id="table">
		<div id="kocka" >
				<?php
				$met=0;
				if (isset($_POST["met"])) {
					$vsota=0;
					for($i=0;$i<$_SESSION["stK"];$i++){
						$randomst = rand(1,6);
						$vsota+=$randomst;
						echo "<div class=\"dice\" ><img src=\"slike/dice{$randomst}.png\"></div>";
					}
					
					$Vrsta = $imena[$_SESSION["Vrsta"] - 1];
					$_SESSION["igralci"][$Vrsta] += $vsota;
					$podatki = $_SESSION["igralci"];
					$_SESSION["Vrsta"]++;
				}
				?>
				
			</div>
			<div class="clear"></div>
				<form method="POST" action="drugi.php">
					<center><input type="submit" name="met" value="met" style="font-size: 40px; width: 150px; height: 50px;"/></center>
				</form>
			</div>
			<div id="igralci">
			
				<div id="igralec">
				<center><font color="white" style="font-size: 40px;"><?php echo $imena[0];?></font><br />
					<font style="font-size: 70px;">
					<?php echo $podatki[$imena[0]];?></center>
					</font>
					</center>
				</div>
				
				<div id="igralec">
					<center><font color="white" style="font-size: 40px;"><?php echo $imena[1];?></font><br />
					<font style="font-size: 70px;">
					<?php echo $podatki[$imena[1]];?>
					</center>
					</font>
					</center>
				</div>
				<div id="igralec" style="margin: 5px 0 0 0;">
				<center><font color="white" style="font-size: 40px;"><?php echo $imena[2];?></font><br />
					<font style="font-size: 70px;"><?php echo $podatki[$imena[2]];;?>
				</center>
					</font>
				</div>
				
			</div>
		</div>
	</div>
</body>
</html> 