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
			<form action="transaction_enquiry.php" action="GET">
				<span id="h5">Transaction Enquiry:</span>
				<input type="text" placeholder="Transaction Reference Number" name="transaction_ref">
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

	<div id="wrapper">
		<section>
			<article>
				<h3>Transaction Enquiry</h3>
				<?php
				$inputTransactionReference = $_GET['transaction_ref'];
				session_start();
								
				@ $db = new mysqli('localhost', 'f33ee', 'f33ee', 'f33ee');
	
				if (mysqli_connect_errno()) {
					echo 'Error: Could not connect to database.  Please try again later.';
					exit;
				}
				
				
				$query = "SELECT * from transactions where transaction_id =".$inputTransactionReference."";
				
				$result = $db->query($query);
				
				$row = $result->fetch_assoc();
				
				$transaction_id = $row['transaction_id'];
				$contact_name = $row['contact_name'];
				$contact_number = $row['contact_number'];
				$contact_email = $row['contact_email'];
				$delivery_address = $row['delivery_address'];
				$delivery_time = $row['delivery_time'];
				$collection_time = $row['collection_time'];
				$pax = $row['pax'];
				$payment_method = $row['payment_method'];
				$payment_amount = $row['payment_amount'];
				$package_content = $row['package_content'];
				
				echo "<p>"."Contact Name: ".$contact_name."</p>";
				echo "<p>"."Contact Email: ".$contact_email."</p>";
				echo "<p>"."Contact Number: ".$contact_number."</p>";
				echo "<p>"."Delivery Address: ".$delivery_address."</p>";
				echo "<p>"."Delivery Time: ".$delivery_time."</p>";
				echo "<p>"."Collection Time: ".$collection_time."</p>";
				echo "<p>"."Pax: ".$pax."</p>";
				echo "<p>"."Payment Method: ".$payment_method."</p>";
				echo "<p>"."Payment Amount: ".$payment_amount."</p>";
				echo "<p>"."Package Contents: ".$package_content."</p>";
				
				
				?>

			</section>

	</div>

	
	<footer>
		<small>
			<i>Copyright &copy; 2015 How's Catering</i>
			<br>
		<	a href="mailto:webmaster@howscatering.com">webmaster@howscatering.com</a>
		</small>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>