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
				
				$query = "SELECT * from dishes";
				
				$result = $db ->query($query);
				/*
				$result = $db->query($query);
				How I diagnosed the problem: 
				1. I noticed that the footer wasn't displaying
				If the footer wasn't displaying, means there is something loose somewhere that throws an error that causes the page to stop loading.
				
				2. I inserted echo statements to identify the line of code causing the error. It eventually lead to the the $result = $db assignment line. 
				
				3. I analysed the line in comparison to the one on line 51 of packageSelector.php. The only difference was the spacing between the -> symbol. 
				*/
				
				
				$num_results = $result->num_rows;
				for ($i=0; $i <$num_results; $i++) {
					$row = $result->fetch_assoc();
					echo $row['dish_id'];
					echo $row['dish_type'];
					echo $row['dish_name'];
					echo $row['dish_description'];
					echo $row['dish_img_location'];
				}
				
				$result->free();
				$db->close();
		
			?>
			
		<table align="center" border="1">
			<tr>	
				<td>Image</td>
				<td>description1</td>
				<td>description2</td>
				<td>description3</td>
			</tr>
			<tr>
				<td>Image</td>
				<td>description1</td>
				<td>description2</td>
				<td>description3</td>
			</tr>
		</table>
			
			
			</section>
		</div>

 

	?>
	<table align="center" border="1">
	<tr>	<td>Image</td>
			<td>description1</td>
			<td>description2</td>
			<td>description3</td>
	</tr>
	<tr>	<td>Image</td>
			<td>description1</td>
			<td>description2</td>
			<td>description3</td>
	</tr>
	</table>

	</body>
	 

<div id="wrapperfoot">
<footer>
		<small>
			<i>Copyright &copy; 2015 How's Catering</i>
			<br>
			<a href="mailto:webmaster@howscatering.com">webmaster@howscatering.com</a>
		</small>
	</footer>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js\app.js"></script>
</body>

</html>