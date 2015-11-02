<!DOCTYPE html>
<html lang="en">

<head>
	<title>How's Catering</title>
	<meta charset="utf-8">
	<link href='https://fonts.googleapis.com/css?family=Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
	<link href="css/normalize.css" rel="stylesheet" type="text/css">
	<link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<a href="index.html" id="logo">
			<img src="img/Logo trans.png">
		</a>
		<div id="transactionBox">
			<form action="" action="post">
				<span id="h5">Transaction Enquiry:</span>
				<input type="text" placeholder="Transaction Reference Number">
				<input type="submit" value=">">
			</form>
		</div>
		<nav>
			<ul>
				<li><a href="menu.php"><h1>Menu</h1></a></li>
				<li><a href="ordering.html"><h1>Ordering</h1></a></li>
				<li><a href="contact.html"><h1>Contact Us</h1></a></li>
			</ul>
		</nav>
	</header>
	
	<body>
		<div id="wrapper">
			<section>
				<?php
				session_start();
			
				@ $db = new mysqli('localhost', 'f33ee', 'f33ee', 'f33ee');
	

				if (mysqli_connect_errno()) {
						echo 'Error: Could not connect to database.  Please try again later.';
						exit;
				}
				
				$query = "SELECT * from dishes ";
				
				$result = $db ->query($query);
				$num_results = $result->num_rows;
				
				echo "<table align='center' border='0'>";
				
				for ($i=0; $i <$num_results; $i++) {
					$row = $result->fetch_assoc();
					echo "<tr><td>".$row['dish_id']."</td>";
					echo "<td>".$row['dish_name']."</td>";
					echo "<td>".$row['dish_type']."</td>";
					echo "<td>".$row['dish_description']."</td>";
					echo "<td><img src='".$row['dish_img_location']."'width='400' height='200'></td></tr>";
				
				}
				
				$result->free();
				$db->close();
		
			?>
			
			</section>
		</div>
		
	<footer>
		<small>
			<i>Copyright &copy; 2015 How's Catering</i>
			<br>
			<a href="mailto:webmaster@howscatering.com">webmaster@howscatering.com</a>
		</small>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js\app.js"></script>
</body>

</html>