<?php
$con = mysqli_connect('localhost','root','','anu_photo');    //connectin
if(!$con){
    die('Could not connect: ' . mysql_error());
    }

    $sql1 = "SELECT Name,Email,Phone,Message From contact";
    $result = $con->query($sql1);
?>

<!DOCTYPE html> 
<html> 
	<head> 
		<title> Photography  </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:1000px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Anu Photography Record</h2></th> 
		</tr> 
			  <th> Name </th> 
			  <th> Email </th> 
			  <th> Phone </th> 
			  <th> Message </th> 
			  
		</tr> 
        <?php 
		while($rows=mysqli_fetch_array($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['Name']; ?></td> 
		<td><?php echo $rows['Email']; ?></td> 
		<td><?php echo $rows['Phone']; ?></td> 
		<td><?php echo $rows['Message']; ?></td> 
		</tr> 
	<?php 
               } 
          ?>
		

	</table> 
	</body> 
	</html>