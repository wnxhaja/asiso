<!DOCTYPE html>

<html>
	<head>
		<title>
			<?php echo $title; ?>
		</title>
	</head>
	
<body>

		<div>
			<h1>Events</h1><br>
			<table>
				<thead>
					<tr>
						<th>Name</th>
						<th>Location</th>
						<th>Event Date</th>
						<th>Time Start</th>
						<th>Time End</th>
						<th>College Owner</th>
						<th>Signal</th>
					</tr>
				</thead>
				<tbody>
				
				
					<?php
						foreach($event->result() as $row)
						{
							
							echo "<tr>";
							echo "<td> <a href=' http://localhost/asiso/index.php/event_controller/index?eventid=". $row->eventid."'>" . $row->name . " </a>  </td>";
							echo "<td>".$row->location."</td>";
							echo "<td>".$row->date."</td>";
							echo "<td>".$row->in_time."</td>";
							echo "<td>".$row->out_time."</td>";
							echo "<td>".$row->college_owner."</td>";
							echo "<td>".$row->signal."</td>";
							echo "</tr>";
							
						}
					?>
				</tbody>
			</table>
		</div>
</body>
</html>