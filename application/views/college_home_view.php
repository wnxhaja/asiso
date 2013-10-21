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
			<li><a href= "<?php echo site_url('student_page') ?>" >Profile</a></li>
			<li><a href= "<?php echo site_url('college_page') ?>" ><?php echo $title ?></a></li>
			<li><a href= "<?php echo site_url('event_page') ?>">Events</a></li>
			<li><a href= "<?php echo site_url('controller/logout') ?>" >Sign-out</a></li>
		</ul>	
	</div>
	
		<!--Content of the page-->
	<div class="content">
		<div class="info">
			<div class="details">
				<center>College Information</center>
				<table cellpadding= 2 cellspacing = 2>
				
					<tr>
						<td>Name</td>
						<td><?php echo $title ?>
					</tr>
					
					<tr>
						<td>Governor</td>
						<td><?php echo $governorFName ?> <?php echo $governorLName ?>
					</tr>
					
				</table>
		
			</div>
			
			<div class="picture">
				<img src="<?php echo base_url() ?>img/college_logos/<?php echo $title ?>.gif" width="196" height="200" align="texttop" longdesc="<?php echo base_url() ?>img/iit-logo.gif" />
			</div>
		</div>
		
		
		
		<div class="eventsattended">
			
			<table border = 0 cellpadding = 2 cellspacing = 10>
				<th class = "recordheader">Admin Name</th>
				<th class = "recordheader">Course</th>
				<th class = "recordheader">College</th>
				
				<?php
					//table for the records
					foreach($admins as $a) {
						echo '<tr align = \'center\'>';
						echo '<td class="recordheader">' . $a['fname'] . '</td>';
						echo '<td class="recordheader">' . $a['college'] . '</td>';
						echo '<td class="recordheader">' . $a['course'] . '</td>';
					/*	echo '<td class="recordheader">';
						echo $r['signed_in'] ? 'yes' : 'no';
						echo '</td>';
						echo '<td class="recordheader"></td>';
						echo '<td class="recordheader">';
						echo $r['signed_out'] ? 'yes' : 'no';
						echo '</td>';
						echo '<td class="recordheader"></td>';
						echo '</tr>';*/
					}
				?>
				
			</table>
			
		</div>
	</div>
	<div id="well">
		<center><li><a href ="#">All rights reserved 2013. </a></li></center>
		<center><li><a href ="#">Copyright &copy Snoop Dogs</a></li></center>
	</div>
</body>