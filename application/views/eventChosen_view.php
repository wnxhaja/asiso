<body>
	<!--MSUIIT Logo-->
	<p><center><img src="<?php echo base_url() ?>img/iit-logo.gif" width="94" height="94" align="texttop" longdesc="<?php echo base_url() ?>img/iit-logo.gif" />
	</center></p>
	<!-- ID header -->
	<div id="header">
		<h1>MSU-IIT ATTENDANCE CHECKER</h1>
		<span id="date_time"></span>
	</div>
	<!--Code for the dropdown navmenu -->
	<div>
		<ul id ="navmenu">
			<li><a href= "<?php echo base_url() ?>" >Home</a></li>
			<li><a href= "<?php echo site_url('controller/logout') ?>" >Sign-out</a></li>
		</ul>	
	</div>
	
	
	<!--Content of the page-->
	<div id ="body" class="eventcontent">
		<div class = "register" >
			<ul id="eventChosen">
				<?php
				echo "<li> Event Name: ". $event['eventname'] . "</li>";
				echo "<li> Event Owner: ". $event['collageowner'] . "</li>";
				echo "<li> Event Location: ". $event['eventloc'] . "</li>";
				echo "<li> Date of event: ". $event['eventdate'] . "</li>";
				
				
				if($event['signal'] === 'green'){
					echo "<li> Sign-in Time: ". $event['intime'] . "</li>";
					echo "<li><form action='ifStartSiSo?eventid=".$event['eventid']."&signal=".$event['signal']."' method='post'> <input class ='register-button' type='submit' value='Start Sign-in' name='signIn'></form></li>";
				}
				elseif($event['signal'] === 'yellow'){
					echo "<li> Sign-out Time: ". $event['outtime'] . "</li>";
					echo "<li><form action='ifStartSiSo?eventid=".$event['eventid']."&signal=".$event['signal']."' method='post'> <input class ='register-button' type='submit' value='Start Sign-out' name='signOut'></form></li>";
				}
				?>
			</ul>
		</div>
	</div>
	
	<div class="row">
		<div class="span12">
			<div id="well">
				<center><li><a href ="#">All rights reserved 2013. </a></li></center>
				<center><li><a href ="#">Copyright &copy Snoop Dogs</a></li></center>
			</div>
		</div>
	</div>	
	
</body>