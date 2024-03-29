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
				<h3>Package Selector</h3>
				
				<form method='POST' action='dishConfirmation.php' id='packageSelect'>
					<p>Number of people attending:<br> <input type="number" name="pax"></p>
				<?php 
				session_start();
					$selectedPackage = $_POST['packageChoice'];

					
					@ $db = new mysqli('localhost', 'f33ee', 'f33ee', 'f33ee');
	
					if (mysqli_connect_errno()) {
						echo 'Error: Could not connect to database.  Please try again later.';
						exit;
					}
					$_SESSION['package_cost'] = $selectedPackage;

					$query = "select * from packages where package_cost like '%".$selectedPackage."%'";
					$result = $db ->query($query);
					$row = $result->fetch_assoc();
					
					$packageID = $row['package_id'];
					$packageName = $row['packagename'];
					$packageCost = $row['package_cost'];
					$mainChoice1 = $row['main_1_choices'];
					$mainChoice2 = $row['main_2_choices'];
					$optChoice1 = $row['opt_1_choices'];
					$optChoice2 = $row['opt_2_choices'];
					
					$mainChoice1Arr = explode(",", $mainChoice1);
					$mainChoice2Arr = explode(",", $mainChoice2);
					$optChoice1Arr = explode(",", $optChoice1);
					$optChoice2Arr = explode(",", $optChoice2);
					
					$mainChoice1Names = array();
					$mainChoice2Names = array();
					$optChoice1Names = array();
					$optChoice2Names = array();
					
					
				
					for($i=0;$i<count($mainChoice1Arr);$i++){
						$populatingDishes = "select dish_name from dishes where dish_id = '".$mainChoice1Arr[$i]."'";
						$dishResult = $db -> query($populatingDishes);
						$dishRow = $dishResult->fetch_assoc();
						$mainChoice1Names[] = $dishRow['dish_name'];
						$dishResult->free();
					}
					
					for($i=0;$i<count($mainChoice2Arr);$i++){
						$populatingDishes = "select dish_name from dishes where dish_id = '".$mainChoice2Arr[$i]."'";
						$dishResult = $db -> query($populatingDishes);
						$dishRow = $dishResult->fetch_assoc();
						$mainChoice2Names[] = $dishRow['dish_name'];
						$dishResult->free();
					}
					
					for($i=0;$i<count($optChoice1Arr);$i++){
						$populatingDishes = "select dish_name from dishes where dish_id = '".$optChoice1Arr[$i]."'";
						$dishResult = $db -> query($populatingDishes);
						$dishRow = $dishResult->fetch_assoc();
						$optChoice1Names[] = $dishRow['dish_name'];
						$dishResult->free();
					}
					
					for($i=0;$i<count($optChoice2Arr);$i++){
						$populatingDishes = "select dish_name from dishes where dish_id = '".$optChoice2Arr[$i]."'";
						$dishResult = $db -> query($populatingDishes);
						$dishRow = $dishResult->fetch_assoc();
						$optChoice2Names[] = $dishRow['dish_name'];
						$dishResult->free();
					}
					
					$_SESSION['mainChoice1NameArr'] = $mainChoice1Names;
					$_SESSION['mainChoice2NameArr'] = $mainChoice2Names;
					$_SESSION['optChoice1NameArr'] = $optChoice1Names;
					$_SESSION['optChoice2NameArr'] = $optChoice2Names;
									

					
					echo "<p>Main Dish 1<p>";
					echo "<select name='main1Selection' form='packageSelect'>";
					for($i=0;$i<count($mainChoice1Arr);$i++){
						echo '<option value="'.$mainChoice1Arr[$i].'">'.$mainChoice1Names[$i].'</option>';
					}
					echo '</select>';
					echo "<br>";
					
					echo "<p>Main Dish 2<p>";
					echo "<select name='main2Selection' form='packageSelect'>";
					for($i=0;$i<count($mainChoice2Arr);$i++){
						echo '<option value="'.$mainChoice2Arr[$i].'">'.$mainChoice2Names[$i].'</option>';
					}
					echo '</select>';
					echo "<br>";
					
					echo "<p>Side Dish 1<p>";
					echo "<select name='opt1Selection' form='packageSelect'>";
					for($i=0;$i<count($optChoice1Arr);$i++){
						echo '<option value="'.$optChoice1Arr[$i].'">'.$optChoice1Names[$i].'</option>';
					}
					echo '</select>';
					echo "<br>";
					
					echo "<p>Side Dish 1<p>";
					echo "<select name='opt2Selection' form='packageSelect'>";
					for($i=0;$i<count($optChoice2Arr);$i++){
						echo '<option value="'.$optChoice2Arr[$i].'">'.$optChoice2Names[$i].'</option>';
					}
					echo '</select>';
					echo "<br>";
					echo '<input type="submit" value="Confirm">';
					
					echo "</form>";
					
					$result->free();
					$db-> close();
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
	<script src="js/app.js"></script>
</body>

</html>