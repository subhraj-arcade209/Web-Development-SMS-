<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	  <style>
		input[type=text] {
 			border: 2px solid red;
  			border-radius: 50px;
			width:700px;
			border: 2px solid red; 
			font-size: 19px;
			-webkit-box-shadow: 
			inset 0 0 8px  rgba(0,0,0,0.1),
					0 0 16px rgba(0,0,0,0.1); 
			-moz-box-shadow: 
			inset 0 0 8px  rgba(0,0,0,0.1),
					0 0 16px rgba(0,0,0,0.1); 
			box-shadow: 
			inset 0 0 8px  rgba(0,0,0,0.1),
					0 0 16px rgba(0,0,0,0.1); 
			padding: 3px;
			background: rgba(255,255,255,0.5);
			margin: 0 0 3px 0;
			text-shadow: 0 1px #9F9302, 0 2px #FF001F;
			}
		input[type=password] {
			border-radius: 50px;
			width:700px;
			border: 2px solid green;
			font-size: 19px; 
			-webkit-box-shadow: 
			inset 0 0 8px  rgba(0,0,0,0.1),
					0 0 16px rgba(0,0,0,0.1); 
			-moz-box-shadow: 
			inset 0 0 8px  rgba(0,0,0,0.1),
					0 0 16px rgba(0,0,0,0.1); 
			box-shadow: 
			inset 0 0 8px  rgba(0,0,0,0.1),
					0 0 16px rgba(0,0,0,0.1); 
			padding: 3px;
			background: rgba(255,255,255,0.5);
			margin: 0 0 3px 0;
			}
			.wrapper h3{
				color: #FFFE03;
				font-weight: normal;
				font-family: 'Aclonica';
				font-size: 36px;
				line-height: 42px;
				text-transform: normal;

				
			  }
			  label {
				padding: 12px 12px 12px 0;
				display: inline-block;
				font-family: 'Courgette';
				font-size: 22px;
				color: #0EEA40;
				text-shadow: 0 1px #9F9302, 0 2px #FF001F;
				}
					input[type=submit]  {
					position: relative;
					background-color: #021F1D;
					border: none;
					border-radius: 20px;
					font-size: 20px;
					color: #BECD0A;
					padding: 5px;
					width: 150px;
					text-align: center;
					transition-duration: 0.2s;
					text-decoration: none;
					overflow: hidden;
					cursor: pointer;
					box-shadow: 0 8px #3F3B04 ;
					}
					input[type=submit]:hover {background-color: #62045B }
					input[type=submit]:active{
						background-color: #900C3F;
						box-shadow: 0 5px #000000 ;
						transform: translateY(4px);
						}</style>
</head>
<body>
	<div class="wrapper">
		<center><h3>Admin LogIn Page</h3><br><label>
		<form action="" method="post">
			Email ID: <input type="text" name="email" required><br><br>
			Password: <input type="password" name="password" required><br><br>
			<input type="submit" name="submit" value="LogIn">
		</form><br></div></label>
		
		<?php
			session_start();
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"management");
				$query = "select * from login where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: admin_dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
				}
				
			}
		?>
	</center>
</body>
</html>