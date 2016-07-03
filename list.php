<?php
session_start();
?>
<!doctype html>
<html>
<head>
	<title>LIST</title>
	<style type="text/css">
		body{
			background: lightblue;
		}

		.tbl{
			background: white;
			border:3px solid indianred;
			border-collapse:collapse; 
			position: relative;
			top:50px;
			color: indianred;
		}

		td,th{
			border:none;
			border-bottom: 1px solid indianred;
			text-align: center;
		}
	</style>
</head>
<body>


	<table class="tbl" width="700" align="center">
		<caption>REGISTERED STUDENTS</caption>
		<tr>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>DOB</th>
			<th>			</th>
		</tr>


		<?php
		$conn =mysqli_connect("localhost","utkarsh","utkarsh","utkarsh") or die(mysqli_connect_error());
		$rows=mysqli_query($conn,"select * from utkarsh")or die(mysqli_error($conn));


		while($value=mysqli_fetch_assoc($rows))
		{
			?>
			<tr>
				<td><?php echo ($value['username']);?></td>
				<td><?php echo ($value['email']);?></td>
				<td><?php echo ($value['dob']);?></td>
				<td width="30"><form action='task3.php' method='POST'><?php $_SESSION['var']=$value['username']?><input type='image' src="delbtn.jpg" width="25" height="25"  /></form></td>
			</tr>
			<?php
		}
		?>



	</table>



</body>
</html>
