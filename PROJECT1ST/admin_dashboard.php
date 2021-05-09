<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="css/dash.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">	
.swappy{
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
 input[type=text] {
    border: none;
    color:black;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    font-family: Garamond, serif;
  }  


	</style>
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"management");
	?>
</head>
<body>
	<div id="header"><br>
		<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:&nbsp; <?php echo $_SESSION['email'];?>.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:&nbsp;<?php echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="logout.php"><b>Logout</b></a>		</center>
	</div>
	<span id="top_span"><marquee><b>The whole purpose of education is to turn mirrors into windows.</b></marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<input type="submit" name="search_student" value="Search Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="edit_student" value="Edit Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="add_new_student" value="Add New Student">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="delete_student" value="Delete Student">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
		<!-- #Code for search student---Start-->
			<?php
				if(isset($_POST['search_student']))
				{
					?><div class="swappy">
					<center>
					<form action="" method="post">
					<h4><b>-:Student's details:-</b></h4><br>
					&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
					<input type="submit" name="search_by_roll_no_for_search" value="Search">
					</form>
					</center></div>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from students where roll_no = '$_POST[roll_no]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center><br><br><br>
						<div class="swappy">
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
						</table></div>
					</center>
						<?php
					}
				}
			?>
		<!-- #Code for edit student details---Start-->
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center><div class="swappy">
				<form action="" method="post">
				<h4><b>-:Student's details:-</b></h4><br>
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_edit" value="Search">
				</form><br><br>
				</center></div>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from students where roll_no = $_POST[roll_no]";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<div class="swappy">
					<form action="admin_edit_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" value="<?php echo $row['class']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
					    <br>
						<tr>
							<td></td>
							<td>
								<input type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
					</form></div>
					<?php
				}
			}
		?>
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_student']))
			{
				?><div class="swappy">
				<center>
				<form action="delete_student.php" method="post">
				<h4><b>-:Enter the Roll No you want deleted:-</b></h4><br>
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center></div>
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<div class="swappy">
					<form action="add_student.php" method="post"><center>
					<center><h4>-:Fill the given details:-</h4></center>
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
				</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
					</form></center></div>
					<?php
				}
			?>
			
		</div>
	</div>
</body>
</html>