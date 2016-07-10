<!DOCTYPE html>
<html>
<head>
	<title>Hello, world!</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<style type="text/css">
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}
	</style>
</head>
<body>
	<img id="logo" src="logo_blue.png" alt="logo.png"/>

	<?php

	$hamburgerPrice = 4.95;
	$milkshakePrice = 1.95;
	$colaPrice = .85;
	$tax = .075;
	$tip = .016;

	printf('Prices\n');
	print '';
	printf('$4.2f : Hamburger\n', $hamburgerPrice);
	printf('$4.2f : Milk Shake \n', $milkshakePrice);
	printf('$4.2f : Cola \n', $colaPrice);
	printf('$4.2f : Tax\n', $tax);
	printf('$4.2f : Tip\n', $tip);
	printf('');

	$totalFood = $hamburgerPrice + $hamburgerPrice + $milkshakePrice + $colaPrice;
	$pretaxTip = $totalFood * $tax;
	$taxOnFood = $totalFood * $tax;

	printf('Lunch Tab\n');
	printf('$4.2f : Food Total\n', $totalFood);
	printf('$4.2f : Pretax Tip\n', $pretaxTip);
	printf('$4.2f : Tax On Food\n', $taxOnFood);
	printf('$4.2f : Total\n', $totalFood + $pretaxTip + $taxOnFood);


	?>

</body>
</html>
