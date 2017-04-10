<?php include('db/config.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Form SHow</title>
</head>
<body>
	<table width="60%" border="1">
			<tr>
				<td>Id</td>
				<td>Name</td>
				<td>Email Id</td>
				<td>Uploaded Image</td>
				<td>Acrticle</td>
			</tr>
			
	<?php
				$rs=$con->query("select * from `form`");
				$count= $rs->num_rows;
				print $count;
				while($row= $rs->fetch_assoc())
				{
					
	?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['emailid']; ?></td>
				<td><?php echo $row['file']; ?></td>
				<td><?php echo $row['article']; ?></td>
			</tr>
				<?php } ?>
	</table>
</body>
