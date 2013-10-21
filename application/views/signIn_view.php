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
				<form action = ' http://localhost/asiso/index.php/attends_controller?eventid=<?php$_GET['eventid']?>' method ='post'>
				<?php
				if($_GET['signal'] === 'green'){
					echo "SignIn Student";
					echo "<li><input class ='register-button' type='submit' value='Sign-in Student' name='signIn'></li>";
					}
				elseif($_GET['signal'] === 'yellow'){
					echo "SignIn Student";
					echo "<li><input class ='register-button' type='submit' value='Sign-out Student' name='signOut'></li";
					}
				?>
				</form>
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