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
				<h5>Transaction Enquiry:</h5>
				<input type="text" placeholder="Transaction Reference Number">
				<input type="submit" value=">">
			</form>
		</div>
		<nav>
			<ul>
				<li><a href="menu.html"><h1>Menu</h1></a></li>
				<li><a href="ordering.html"><h1>Ordering</h1></a></li>
				<li><a href="contact.html"><h1>Contact Us</h1></a></li>
			</ul>
		</nav>
	</header>

	<div id="wrapper">
		<section>
			<article>
				<h3>Delivery Details Confirmation</h3>
				<?php 
					session_start();
					$contact_name = $_POST['contact_name'];
					$contact_number = $_POST['contact_number'];
					$contact_email = $_POST['contact_email'];
					$delivery_address = $_POST['delivery_address'];
					$delivery_time = $_POST['delivery_time'];
					$collection_time = $_POST['collection_time'];
					$payment_method = $_POST['payment_method'];
					
					echo "<p>Name: ".$contact_name."</p>";
					echo "<p>Contact Number: ".$contact_number."</p>";
					echo "<p>Contact Email: ".$contact_email."</p>";
					echo "<p>Delivery Address: ".$delivery_address."</p>";
					echo "<p>Delivery Time: ".$delivery_time."</p>";
					echo "<p>Collection Time: ".$collection_time."</p>";
					echo "<p>Payment Method: ".$payment_method."</p>";
					echo "<p>Payment Amount: ".$_SERVER["package_cost"]."</p>";
					
					echo "<form method='post' action='payment.php'>";
					
					echo "<input type='hidden' value='".$contact_name."' name='contact_name'";
					echo "<input type='hidden' value='".$contact_number."' name='contact_number'";
					echo "<input type='hidden' value='".$contact_email."' name='contact_email'";
					echo "<input type='hidden' value='".$delivery_address."' name='delivery_address'";
					echo "<input type='hidden' value='".$delivery_time."' name='delivery_time'";
					echo "<input type='hidden' value='".$collection_time."' name='collection_time'";
					echo "<input type='hidden' value='".$payment_method."' name='payment_method'";
					echo "<input type='hidden' value='".$_SERVER["package_cost"]."' name='payment_amount'";
					echo "<input type='submit' value='Confirm Details'>";
					
					echo "</form>";				
				?>
				
			</article>
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