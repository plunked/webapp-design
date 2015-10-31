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
					$package_content = $_POST['package_content'];
					$pax = $_SESSION['pax'];
					
					@ $db = new mysqli('localhost', 'f33ee', 'f33ee', 'f33ee');
	
					if (mysqli_connect_errno()) {
						echo 'Error: Could not connect to database.  Please try again later.';
						exit;
					}
					
					/* Testing if the form was posted properly
					echo $contact_name;
					echo $contact_number;
					echo $contact_email;
					echo $delivery_address;
					echo $delivery_time;
					echo $collection_time;
					echo $payment_method;
					echo $payment_amount;
					echo $package_content;
					*/
					
					$query = "
					INSERT INTO transactions
					 (transaction_id, contact_name, contact_number, contact_email, delivery_address, delivery_time, collection_time, pax, payment_method, payment_amount, package_content) 
					 VALUES";
					 $query .="(null,";
					 $query .="'".$contact_name."',";
					 $query .="".$contact_number.",";
					 $query .="'".$contact_email."',";
					 $query .="'".$delivery_address."',";
					 $query .="'".$delivery_time."',";
					 $query .="'".$collection_time."',";
					 $query .="".$pax.",";
					 $query .="'".$payment_method."',";
					 $query .="".$payment_amount.",";
					 $query .="'".$package_content."'";
					 $query .= ")";
					
					
					echo $query;
							
					
					$result = $db->query($query);
					if ($result) {
						echo  $db->affected_rows."transaction added";
					} else {
						$value = mysql_query($your_query) or die("A MySQL error has occurred.<br />Your Query: " . $your_query . "<br /> Error: (" . mysql_errno() . ") " . mysql_error());
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