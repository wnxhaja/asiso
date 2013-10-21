		<li><a href= "<?php echo site_url('controller/logout') ?>" >Sign-out</a></li>
			</ul>	
	</div>
	
	
	<!--Content of the page-->
	<div class="content">
		<div class="info">
			<div class="details">
				<center>Student Information</center>
				<table cellpadding= 2 cellspacing = 5>
				
					<tr>
						<td>Name</td>
						<td><?php echo $name ?>
					</tr>
					
					<tr>
						<td>Username</td>
						<td><?php echo $username ?>
					</tr>
					
					<tr>
						<td>Acc Type</td>
						<td><?php echo $accnt ?></td>
					</tr>
					
					<tr>
						<td>Id Number</td>
						<td><?php echo $idnumber ?></td>
					</tr>
					
					<tr>
						<td>Course</td>
						<td><?php echo $course ?></td>
					</tr>
					
					<tr>
						<td>College</td>
						<td><?php echo $college ?></td>
					</tr>
					
				</table>
		
			</div>
			
			<div class="picture">
				<img src="<?php echo base_url() ?>img/iit-logo.gif" width="196" height="200" align="texttop" longdesc="<?php echo base_url() ?>img/iit-logo.gif" />
			</div>
		</div>
		
		<div class="eventsattended">
			
			<table border = 0 cellpadding = 2 cellspacing = 10>
				<th class = "recordheader">Event Name</th>
				<th class = "recordheader">Date</th>
				<th class = "recordheader">Location</th>
				<th class = "recordheader">Signed in</th>
				<th class = "recordheader">Signed in by</th>
				<th class = "recordheader">Signed out</th>
				<th class = "recordheader">Signed out by</th>
				
				<?php
					//table for the records
					foreach($records as $r) {
						echo '<tr align = \'center\'>';
						echo '<td class="recordheader">' . $r['name'] . '</td>';
						echo '<td class="recordheader">' . $r['date'] . '</td>';
						echo '<td class="recordheader">' . $r['location'] . '</td>';
						echo '<td class="recordheader">';
						echo $r['signed_in'] ? 'yes' : 'no';
						echo '</td>';
						echo '<td class="recordheader"></td>';
						echo '<td class="recordheader">';
						echo $r['signed_out'] ? 'yes' : 'no';
						echo '</td>';
						echo '<td class="recordheader"></td>';
						echo '</tr>';
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