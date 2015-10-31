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
				<h3>Dish Confirmation</h3>
				<?php 
					session_start();
					$pax = $_POST['pax'];
					$mainChoice1 = $_POST['main1Selection'] -1;
					$mainChoice2 = $_POST['main2Selection'] -1;
					$optChoice1 = $_POST['opt1Selection'] -1;
					$optChoice2 = $_POST['opt2Selection']-1;
					

			
					foreach($_SESSION['mainChoice1NameArr'] as $key=>$value){
						$mainChoice1Names[$key] = $value;
					}
					
					foreach($_SESSION['mainChoice2NameArr'] as $key=>$value){
						$mainChoice2Names[$key] = $value;				
					}
					
					foreach($_SESSION['optChoice1NameArr'] as $key=>$value){
						$optChoice1Names[$key] = $value;				
					}
					
					foreach($_SESSION['optChoice2NameArr'] as $key=>$value){
						$optChoice2Names[$key] = $value;				
					}


					echo "<p>Number of people attending: ".$pax."</p>";
					echo "<h4>Dish 1<br></h4";
					echo "<p>".$mainChoice1Names[$mainChoice1]."</p>";
					
					echo "<h4>Dish 2<br></h4";
					echo "<p>".$mainChoice2Names[$mainChoice2]."</p>";
					
					echo "<h4>Dish 3<br></h4";
					echo "<p>".$optChoice1Names[$optChoice1]."</p>";
					
					echo "<h4>Dish 4<br></h4";
					echo "<p>".$optChoice2Names[$optChoice2]."</p>";
					
					$_SESSION['mainChoice1'] = $mainChoice1.",".$mainChoice1Names[$mainChoice1];
					
					$_SESSION['mainChoice2'] = $mainChoice2.",".$mainChoice2Names[$mainChoice2];
					
					$_SESSION['optChoice1'] = $optChoice1.",".$optChoice1Names[$optChoice1];
					
					$_SESSION['optChoice2'] = $optChoice2.",".$optChoice2Names[$optChoice2];
					
					$_SESSION['package_content'] = $mainChoice1Names[$mainChoice1].','.$mainChoice2Names[$mainChoice2].','.$optChoice1Names[$optChoice1].','.$optChoice2Names[$optChoice2];
					
					$_SESSION['pax'] = $pax;
								
				?>
				<form method="post" action="deliveryDetails.php">
					<input type="submit" value="Next">
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