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
		<h1>Intranet Administrative Console</h1>
		
	</header>

	<div id="wrapper">
		<section>
			<article>
				<h3>Update Transaction</h3>
				<?php
								
				@ $db = new mysqli('localhost', 'f33ee', 'f33ee', 'f33ee');
				/*If it was truly an internal page, another user would have been created and authorized in phpmyadmin*/
	
				if (mysqli_connect_errno()) {
					echo 'Error: Could not connect to database.  Please try again later.';
					exit;
				}
					$transaction_id = $_POST['transaction_id'];
					$contact_name = $_POST['contact_name'];
					$contact_number = $_POST['contact_number'];
					$contact_email = $_POST['contact_email'];
					$delivery_address = $_POST['delivery_address'];
					$delivery_date = $_POST['delivery_date'];
					$delivery_time = $_POST['delivery_time'];
					$collection_date = $_POST['collection_date'];
					$collection_time = $_POST['collection_time'];
					$pax = $_POST['pax'];
					$payment_method = $_POST['payment_method'];
					$payment_amount = $_POST['payment_amount'];
					$package_content = $_POST['package_content'];
					
				$query ="UPDATE transactions";
				$query .="SET ";
				$query .="contact_name='".$contact_name."'".",";
				$query .="contact_number=".$contact_number.",";
				$query .="contact_email='".$contact_email."'".",";
				$query .="delivery_address='".$delivery_address."'".",";
				$query .="delivery_time='".$delivery_time."'".",";
				$query .="collection_time='".$collection_time."'".",";
				$query .="pax='".$pax."'".",";
				$query .="payment_method='".$payment_method."'".",";
				$query .="payment_amount='".$payment_amount."'".",";
				$query .="package_content='".$package_content."'"."";
				$query .="WHERE transaction_id=".$transaction_id."";
			
				
				$result = $db->query($query);
					if ($result) {
						echo  $db->affected_rows."transaction added";
					} else {
						$value = mysql_query($your_query) or die("A MySQL error has occurred.<br />Your Query: " . $your_query . "<br /> Error: (" . mysql_errno() . ") " . mysql_error());
					}
				
				
				?>
					

				
			</section>

	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>