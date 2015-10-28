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
				<li><a href="menu.php"><h1>Menu</h1></a></li>
				<li><a href="ordering.html"><h1>Ordering</h1></a></li>
				<li><a href="contact.html"><h1>Contact Us</h1></a></li>
			</ul>
		</nav>
	</header>

	<div id="wrapper">
		<section>
			<article>
				<h3>Delivery Details</h3>
				<form method="post" action="deliveryConfirmation.php" id="deliveryConfirmation">
					<p>Name: <input type="text" name="contact_name" placeholder="Legal Name" required></p>
					<p>Contact Number: <input type="tel" name="contact_number" required></p>
					<p>Contact Email: <input type="email" name="contact_email" required></p>
					<p>Delivery Address: <input type="text" name="delivery_address" required></p>
					<p>Delivery Time: <input type="datetime-local" name="delivery_time" required></p>
					<p>Collection Time: <input type="datetime-local" name="collection_time" required></p>
					<p>Payment Method: <select name="payment_method" form="deliveryConfirmation">
						<option value="paypal">Paypal</option>
						<option value="cash">Cash</option>
						<option value="creditcard">Credit Card</option>
						</select>
						</p>
					<p><input type="submit" value="Confirm Details"></p>
				</form>
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