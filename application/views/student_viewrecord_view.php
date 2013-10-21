<body>
	<!--MSUIIT Logo-->
	<p><center><img src="<?php echo base_url() ?>img/iit-logo.gif" width="94" height="94" align="texttop" longdesc="<?php echo base_url() ?>img/iit-logo.gif" />
	</center></p>
	<!-- ID header -->
	<div id="header">
		<h1>MSU-IIT ATTENDANCE CHECKER</h1>
	</div>
	<!--Code for the dropdown navmenu -->
	<div>
		<ul id ="navmenu">
			<li><a href= "<?php echo site_url('student_page') ?>" >Home</a></li>
			<li><a href="#">Records</a><span class="darrow">&#9660;</span>
				<ul class="sub1">
					<li><a href="<?php echo current_url() ?>">Event Record</a>
				</ul>
			</li>
			<li><a href= "<?php echo site_url('controller/logout') ?>" >Sign-out</a></li>
		</ul>	
	</div>
	<!--Content of the page-->
	<div class="content">
		
		<center>
		<table border = 0 cellpadding = 2 cellspacing = 20>
			<th class = "recordheader">Event Name</th>
			<th class = "recordheader">Date</th>
			<th class = "recordheader">Location</th>
			<th class = "recordheader">Signed in</th>
			<th class = "recordheader">Signed out</th>
			
			<?php
				//table for the records
				foreach($records as $r) {
					echo '<tr align = \'center\'>';
					echo '<td>' . $r['name'] . '</td>';
					echo '<td>' . $r['date'] . '</td>';
					echo '<td>' . $r['location'] . '</td>';
					echo '<td>';
					echo $r['signed_in'] ? 'yes' : 'no';
					echo '</td>';
					echo '<td>';
					echo $r['signed_out'] ? 'yes' : 'no';
					echo '</td>';
					echo '</tr>';
				}
			?>
			
		</table>
		</center>	
	</div>
	

	<div id="well">
		<center><li><a href ="#">All rights reserved 2013. </a></li></center>
		<center><li><a href ="#">Copyright &copy Snoop Dogs</a></li></center>
	</div>

</body>
