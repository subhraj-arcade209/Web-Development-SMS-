<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<link rel="stylesheet" href="css/dash2.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.swappy {
		box-shadow:10px 10px 5px grey;
		background:#C70039;
		border-radius: 20px;
		font-family: 'Trocchi', serif;
		max-width: 350px;
		margin-left: auto;
		margin-right: auto;
		padding-top: 30px;
		padding-bottom: 10px;
		padding-left: 10px;
		padding-right: 10px;
		color:#A3F60E;
		text-shadow: 1.4px 1.4px black;
		font-size: 16px;
		left: 0;
		right: 0;
		position: absolute;
		animation: bounce 1.5s infinite;
		border: solid 3px #250208;
}	
input[type=text] {
    border: none;
    color:black;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    font-family: Garamond, serif;
  }  
#right_side h4{ 
	color: #0EF6B9;
	font-family: 'Droid serif', serif;
	font-size: 26px; 
	font-weight: 300; 
	font-style: italic; 
	line-height: 44px; 
	margin: 0 0 12px; 
	text-shadow: 1.4px 1.4px black;
	text-align: center;
 }
	</style>
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"management");
	?>
</head>
<body>
	<div id="header"><br>
		<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:   <?php echo $_SESSION['email'];?>.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:   <?php echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<a href="logout.php">Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee>Note:- This portal is open till 31 March 2020...Plz inform us if the given details are wrong.</marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
		
			<table>
				<tr>
					<td>
						<input type="submit" name="show_detail" value="Show Detail">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from students where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?><div class="swappy"><center>
				<table>
					<tr>
						<td>
							<b>Roll No:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['roll_no']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Father's Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['father_name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Class:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['class']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Mobile:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['mobile']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['email']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['password']?>" disabled>
						</td>
					</tr>
				</table></center></div>
				<?php
				}	
			}
			?>
		</div>
	</div>
</body>
</html>