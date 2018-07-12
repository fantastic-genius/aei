<table>
	<tr>
		<th style="padding-right: 50px;">Serial Number</th>
        <th style="padding-right: 50px;">PO Name</th>
        <th style="padding-right: 50px;">Unit</th>
        <th style="padding-right: 50px;">Zone</th>
        <th style="padding-right: 50px;">Purpose</th>
        <th style="padding-right: 50px;">Approval</th>
        
    </tr>
    	<?php

			$link = mysqli_connect("localhost", "root", "", "wordpress");
			//$id = $_GET['id'];
			$query = mysqli_query($link, "SELECT * FROM outbound_letter");
			
				
			$count = mysqli_num_rows($query);
			if ($count > 0) {
			 
				while($data = mysqli_fetch_assoc($query)) {
					echo "<form name='delete' action='delete.php' method='post'>
						<tr><td>
						" . $data['serial_number'] . "</td>
						<td><input type='text' name='po_name' value='" . $data['po_name'] . "' required='required' /></td>
						<td><input type='text' name='unit' value='" . $data['unit'] . "'/></td>
						<td><input type='text' name='zone' value='" . $data['zone'] . "' required='required' /></td>
						<td><input type='text' name='purpose' value='" . $data['purpose'] . "' required='required' /></td>
						<td><input type='text' name='approval' value='" . $data['approval'] . "' required='required' /></td>
						<td><input type='submit' name='update' value='Update'/></td>
					</tr></form>";
					
							
				}
			}
				
			
			
		?>

</table>


