<body>
	<!--MSUIIT Logo-->
	<p><center><img src="<?php echo base_url() ?>img/iit-logo.gif" width="94" height="94" align="texttop" longdesc="<?php echo base_url() ?>img/iit-logo.gif" />
	</center></p>
	<!-- ID header -->
	<div id="header">
		<h1>MSU-IIT ATTENDANCE CHECKER</h1>
		<span id="date_time"></span>
			<script type="text/javascript">window.onload = date_time('date_time');</script>
	</div>
	<div id="login_form" >
		<form action=<?php echo site_url('controller/login') ?> method=post>
		
		<table border=0 cellpadding=20 cellspacing=3>
		<tr><td>Username:</td><td><input type=text size=20 name="username" /></td></tr>
		<tr><td>password:</td><td> <input type=password size=20 name="password" /></td></tr>
		<tr><td></td><td><input type=submit border=20 value="Login"></td></tr>
		</table>
		</form>
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