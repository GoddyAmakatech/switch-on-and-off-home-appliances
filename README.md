# switch-on-and-off-home-appliances
the code can switch on and off home appliances, e.g Television, Fan, Fridges etc
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

	  if (isset($_get["Fridge"])) {
		if ($_get["Fridge"] == "on") {
system('light.exe clal+');
	 }
	 if ($_get("Fridge")) {
	  system('light.exe clal-');
	  } 

	  if (isset($_get["Television"])) {
		if ($_get["Television"] == "on") {
system('light.exe clal+');
	 }
	 if ($_get("Television")) {
	  system('light.exe clal-');
	  } 

	  if (isset($_get["Dispenser"])) {
		if ($_get["ispenser"] == "on") {
system('light.exe clal+');
	 }
	 if ($_get("Dispenser")) {
	  system('light.exe clal-');
	  } 
	}
	# a router is needed to serve as an interface between the appliances and the control system
	?>
	<button>
	<a href="index.php?light=on">switch on light</a></button>
	<button>
	<a href="index.php?light=off">switch off light</a></button>
	<button>
	<a href="index.php?fan=on">switch on fan</a></button>
	<button>
	<a href="index.php?fan=off">switch off fan</a></button>

</body>
</html>
