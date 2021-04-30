<?php
session_start();
if ( isset( $_POST['gumb'] ) ) {	
	
	$_SESSION["igralci"] = array($_POST["game1"]=>0, $_POST["game2"]=>0, $_POST["game3"]=>0);
	$_SESSION["stK"] = $_POST["stK"];
	$_SESSION["stM"] = $_POST["stM"];
	$_SESSION["metGlavni"]=1;
	$_SESSION["Vrsta"]=1;
	header("Location: drugi.php");
}
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
		<div id="header">
			<div id="title"><h1>Igralnica</h1></div>
			<div class="clear"></div>
		</div>
		<div id="main" class="forma">
		
			<form method="POST" id="test" action="index.php">
				<div id="box" style="width: 250px;">
					Igralec 1:<br />
					<input onpaste="return false" id="inputs1" maxlength="15" style="color: #ffffff;" type="text" name="game1" autocomplete="off">
				</div>
				
				<div id="box" style="border-color: #000000; width: 250px;" >
					Igralec 2:<br />
					<input onpaste="return false" id="inputs2" maxlength="15" style="color: #ffffff;" type="text" name="game2" autocomplete="off">
				</div>			<div id="box" style="border-color: #000000; width: 250px;">
					Igralec 3:<br />
					<input onpaste="return false" id="inputs3" maxlength="15" style="color: #ffffff;" type="text" name="game3" autocomplete="off">
				</div>
				
				<div id="box" style="border-color: white; width: 850px;">
					Stevilo kock:
					<select class="drop" name="stK">
					  <option value="1">1</option>
		  <option value="2">2</option>
					  <option value="3">3</option>
					</select>
					<div style="float: right">
					Stevilo metov:
		<select class="drop" name="stM">
					  <option value="1">1</option>
	  <option value="2">2</option>
					  <option value="3">3</option>
			</select>
					</div>
				</div>
				<center><input type="submit" name="gumb" value="met Kocke"/></center>
	</form>	

		</div>
	</div>
	<script>
	
		document.getElementById("inputs1").onkeypress = function(e) {
			var chr = String.fromCharCode(e.which);
			if ("ČčŠšŽžĆćĐđ,.-_:;*+'?=)(/&%$#\"€÷×¤ßŁł][@{}§<>!¸\\|".indexOf(chr) > 0)
				return false;
		};
		
		document.getElementById("inputs2").onkeypress = function(e) {
			var chr = String.fromCharCode(e.which);
			if ("ČčŠšŽžĆćĐđ,.-_:;*+'?=)(/&%$#\"€÷×¤ßŁł][@{}§<>!¸\\|".indexOf(chr) > 0)
				return false;
		};
		
		document.getElementById("inputs3").onkeypress = function(e) {
			var chr = String.fromCharCode(e.which);
			if ("ČčŠšŽžĆćĐđ,.-_:;*+'?=)(/&%$#\"€÷×¤ßŁł][@{}§<>!¸\\|".indexOf(chr) > 0)
				return false;
		};
	
	</script>
	
	
</body>
</html> 