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
				<h3>Package Selector</h3>
				<?php 
				session_start();
					$selectedPackage = $_POST['packageChoice'];
					@ $db = new mysqli('localhost', 'f33ee', 'f33ee', 'f33ee');
	
					if (mysqli_connect_errno()) {
						echo 'Error: Could not connect to database.  Please try again later.';
						exit;
					}
					
					$query = "select * from packages where package_cost like '%".$selectedPackage."%'";
					$result = $db ->query($query);
					$row = $result->fetch_assoc();
					
					$packageID = $row['packageid'];
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
					
					$_SESSION['mainChoice1NameArr'] = $mainChoice1Names;
					$_SESSION['mainChoice2NameArr'] = $mainChoice2Names;
					$_SESSION['optChoice1NameArr'] = $optChoice1Names;
					$_SESSION['optChoice2NameArr'] = $optChoice2Names;
				
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
									
					
					echo "<form method='POST' action='dishConfirmation.php'>";
					echo "<select id='main1Selection'>";
					echo '<option value="'.$mainChoice1Arr[0].'">'.$mainChoice1Names[0].'</option>';
					echo '<option value="'.$mainChoice1Arr[1].'">'.$mainChoice1Names[1].'</option>';
					echo '<option value="'.$mainChoice1Arr[2].'">'.$mainChoice1Names[2].'</option>';
					echo '</select>';
					
					echo "<select id='main2Selection'>";
					echo '<option value="'.$mainChoice2Arr[0].'">'.$mainChoice2Names[0].'</option>';
					echo '<option value="'.$mainChoice2Arr[1].'">'.$mainChoice2Names[1].'</option>';
					echo '<option value="'.$mainChoice2Arr[2].'">'.$mainChoice2Names[2].'</option>';
					echo '</select>';
					
					echo "<select id='opt1Selection'>";
					echo '<option value="'.$optChoice1Arr[0].'">'.$optChoice1Names[0].'</option>';
					echo '<option value="'.$optChoice1Arr[1].'">'.$optChoice1Names[1].'</option>';
					echo '<option value="'.$optChoice1Arr[2].'">'.$optChoice1Names[2].'</option>';
					echo '</select>';
					
					echo "<select id='opt2Selection'>";
					echo '<option value="'.$optChoice2Arr[0].'">'.$optChoice2Names[0].'</option>';
					echo '<option value="'.$optChoice2Arr[1].'">'.$optChoice2Names[1].'</option>';
					echo '<option value="'.$optChoice2Arr[2].'">'.$optChoice2Names[2].'</option>';
					echo '</select>';
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
	<script src="js\app.js"></script>
</body>

</html>