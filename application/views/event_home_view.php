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
			<li><a href= "<?php echo base_url() ?>">Events</a></li>
			<li><a href= "<?php echo site_url('controller/logout') ?>" >Sign-out</a></li>
		</ul>	
	</div>
	
	<div class="content">
		<div class ="eventWrapper">
			<table class = "myDataTable">
					<tr>
						<th>Name</th>
						<th>Location</th>
						<th>Event Date</th>
						<th>Time Start</th>
						<th>Time End</th>
						<th>College Owner</th>
						<th>Signal</th>
					</tr>
					<?php
						foreach($event->result() as $row)
						{
							echo "<tr>";
							echo "<td> <a href=' http://localhost/asiso/index.php/event_controller/index?eventid=". $row->eventid."'>" . $row->name . " </a>  </td>";
							echo "<td> <a href=' http://localhost/asiso/index.php/event_controller/index?eventid=". $row->eventid."'>".$row->location." </a>  </td>";
							echo "<td> <a href=' http://localhost/asiso/index.php/event_controller/index?eventid=". $row->eventid."'>".$row->edate." </a>  </td>";
							echo "<td> <a href=' http://localhost/asiso/index.php/event_controller/index?eventid=". $row->eventid."'>".$row->in_time." </a>  </td>";
							echo "<td> <a href=' http://localhost/asiso/index.php/event_controller/index?eventid=". $row->eventid."'>".$row->out_time." </a>  </td>";
							echo "<td> <a href=' http://localhost/asiso/index.php/event_controller/index?eventid=". $row->eventid."'>".$row->college_owner." </a>  </td>";
							echo "<td> <a href=' http://localhost/asiso/index.php/event_controller/index?eventid=". $row->eventid."'>".$row->signal." </a>  </td>";
							echo "</tr>";			
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