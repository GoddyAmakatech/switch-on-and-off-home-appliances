<html>
<body>
<?php 
	if (isset($_get["light"])) {
		if ($_get["light"] == "on") {
system('light.exe clal+');
	 }
	 if ($_get("light")) {
	  system('light.exe clal-');
	  } 
	}
	if (isset($_get["fan"])) {
		if ($_get["fan"] == "on") {
system('light.exe clal+');
	 }
	 if ($_get("fan")) {
	  system('light.exe clal-');
	  } 
	}
	?>
	<a href="index.php?light=on">switch on light</a>
	<a href="index.php?light=off">switch off light</a>
	<a href="index.php?fan=on">switch on fan</a>
	<a href="index.php?fan=off">switch off fan</a>
</body>
</html>