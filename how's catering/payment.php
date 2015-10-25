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
				<h3>Payment Portal Redirect</h3>
				<p>Filler Payment Filler</p>
				<?php 
					session_start();
					$contact_name = $_POST['contact_name'];
					$contact_number = $_POST['contact_number'];
					$contact_email = $_POST['contact_email'];
					$delivery_address = $_POST['delivery_address'];
					$delivery_time = $_POST['delivery_time'];
					$collection_time = $_POST['collection_time'];
					$payment_method = $_POST['payment_method'];
					$payment_amount = $_POST['payment_amount'];
					
					@ $db = new mysqli('localhost', 'f33ee', 'f33ee', 'f33ee');
	
					if (mysqli_connect_errno()) {
						echo 'Error: Could not connect to database.  Please try again later.';
						exit;
					}
					
					$query = "INSERT INTO transactions (transactionid, contact_name, contact_number, contact_email, delivery_address, delivery_time, collection_time, payment_method, payment_amount) values (null, '".$contact_name."',".$contact_number.", '".$contact_email."', '".$delivery_address."','".$delivery_time."', '".$collection_time."','".$payment_method."', ".$payment_amount.")";
							
					$result = $db->query($query);
					if ($result) {
						echo  $db->affected_rows."transaction added";
					} else {
						echo "An error has occurred.  The transaction failed.";
					}
								
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