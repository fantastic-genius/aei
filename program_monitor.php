
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="style.css" />
<title>Outbound Letters</title>
</head>

<body>
<?php
	$uri = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(strpos($uri,'submit=successful') !== false){
		echo "You have succefully submitted your programme details";
	}

?>

<form name="programme_monitor" action="includes/prog_monitor_submit.php" method="post">
	<table>
    	<tr>
        	<th class="row_head">Serial Number</th>
            <td><input type="number" name="serial_num" style="width:200px" required="required" /></td>
        </tr>
        <tr>
        	<th class="row_head">Name of PO</th>
            <td><input type="text" name="po_name" style="width:200px" required="required"/></td>
        </tr>
        <tr>
        	<th class="row_head">Unit</th>
            <td><input type="text" name="unit" style="width:200px" required="required"/></td>
        </tr>
        <tr>
        	<th class="row_head">Zone</th>
            <td><input type="text" name="zone" style="width:200px" required/></td>
        </tr>
        <tr>
        	<th class="row_head">Programme</th>
            <td><textarea type="text" name="programme" rows="4" style="width:200px" required></textarea></td>
        </tr>
        <tr>
        	<th class="row_head">Approval</th>
            <td><input type="text" name="approval" style="width:200px" required/></td>
        </tr>
    
    </table>
    <input type="submit" name="submit" value="Submit" style="margin-left:120px"/>

</form>

</body>
</html>