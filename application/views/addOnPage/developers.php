<!DOCTYPE html>
<html>
<head>
	<title>
		<?php 
				$display = explode('_', $title);
				for($i = 0; $i < count($display); $i++)
					echo ucfirst($display[$i]).' ';	//capitalize first letters
			echo "\n";
		?>
	</title>
</head>
<body>
	Developers.php<br>
	//populate the page
</body>	
</html>