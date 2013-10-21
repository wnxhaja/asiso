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
		<link rel="stylesheet" type="text/css" href="/asiso/css/homepage/log_in.css">
	</head>
	<body>
		<div id="header">
			<p id="headertext">ASISO</p>
			<p id="subheadertext">Automated Sign-in Sign-out</p>
		</div>
		
		<div id="forms">
			<form>
				<span>Username</span> <input type="text" />
				<span>Password</span> <input type="password" />
			</form>
		</div>
		
		<center>
		<table>
			<tr>
			<?php
				//edit this part. replace center tag by div id="footer"
				//you can also edit the gui of the page
				echo '<td>'.anchor('controller/addOnPage/about_asiso', 'About Asiso').'<td>';
				echo '<td>'.anchor('controller/addOnPage/developers', 'Developers').'</td>';
				echo '<td>'.anchor('controller/addOnPage/help', 'Help').'</td>';
			?>
			</tr>
		</table>
		</center>
	</body>
</html>	