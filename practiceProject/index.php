<html>
<head>
	<meta charset="UTF -8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title> Document </title>
</head>

<body>
	<p>This is a <?php echo "awesome"; ?> paragraph!</p>
	<?php echo "This is ALSO a paragraph!"; ?>

	<?php 
		$name = "Saad Bin Harun";
		echo $name;


		//Scalar types:
		$string = "saad";
		$int = 123456789;
		$float = 3.1416;
		$bool = true;

		//Array types:
		$array = array("Saad", "Bin", "Harun");
		$array = ["Saad", "Bin", "Harun"];

		//Object type:
		//$object = new car();
	?>
</body>

</html>