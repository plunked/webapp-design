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
				<h3>Transaction Modification</h3>
				<?php
								
				@ $db = new mysqli('localhost', 'f33ee', 'f33ee', 'f33ee');
				/*If it was truly an internal page, another user would have been created and authorized in phpmyadmin*/
	
				if (mysqli_connect_errno()) {
					echo 'Error: Could not connect to database.  Please try again later.';
					exit;
				}
						
					$editTarget = $_GET['editTarget'];
					$query = "SELECT * from transactions where transaction_id =".$editTarget."";
					
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
					echo $package_content;
										
					echo "<form action='updateTransaction.php' method='GET'";
					echo "<p>"."Transaction ID: "."<input type='number' name='transaction_id' value=".$transaction_id.">"."</p>";
					echo "<p>"."Name: "."<input type='text' name='contact_name' value=".$contact_name.">"."</p>";
					echo "<p>"."Email: "."<input type='email' name='contact_email' value=".$contact_email.">"."</p>";
					echo "<p>"."Contact Number: "."<input type='tel' name='contact_number' value=".$contact_number.">"."</p>";
					echo "<p>"."Delivery Address: "."<input type='text' name='delivery_address' value=".$delivery_address.">"."</p>";
					echo "<p>"."Delivery Time: "."<input type='datetime-local' name='delivery_time' value=".$delivery_time.">"."</p>";
					echo "<p>"."Collection Time: "."<input type='datetime-local' name='collection_time' value=".$collection_time.">"."</p>";
					echo "<p>"."Pax: "."<input type='number' name='pax' value=".$pax.">"."</p>";
					echo "<p>"."Payment Method: "."<input type='text' name='payment_method' value=".$payment_method.">"."</p>";
					echo "<p>"."Payment Amount: "."<input type='number' name='payment_amount' value=".$payment_amount.">"."</p>";
					echo "<p>"."Package Contents: "."<input type='text' name='package_content' value='".$package_content."'>"."</p>";
	
				?>
				
				<input type='submit' value='Submit Updated Values'>
			</form>
					

				
			</section>

	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>