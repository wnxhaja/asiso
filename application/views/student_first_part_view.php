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
	<!--Code for the dropdown navmenu -->
	<div id = "tab">
		<ul id ="navmenu">
			<li><a href= "<?php echo current_url() ?>" >Home</a></li>
