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
		<a href="index2.html" id="logo">
			<img src="img/Logo trans.png">
		</a>
		<div id="transactionBox">
			<form action="" action="post">
				<span id="h5">Transaction Enquiry:</span>
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
	<body>
	<?php
	
	@ $db = new mysqli('localhost', 'root', 'password', 'f33ee');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }
for($i=0;$i<count($dishes);$i++){
  $query = "select dish_name from dishes ";
  $dishResult = $db -> query($query);
						
  $dishRow = $dishResult->fetch_assoc();
  $mainChoice1Names[] = $dishRow['dish_name'];
  //echo .$mainChoice1Names[].;
  $dishResult->free();
  }
  echo '<table align="center" border="1">';
  echo '<tr><td>'.$mainChoice1Names[0].'</td>';
  echo '<td>'.$mainChoice1Names[1].'</td>';
  echo '<td>'.$mainChoice1Names[2].'</td></tr>';
  echo '</table>';
	?>
	<table align="center" border="1">
	<tr>	<td>Image</td>
			<td>description1</td>
			<td>description2</td>
			<td>description3</td>
	</tr>
	<tr>	<td>Image</td>
			<td>description1</td>
			<td>description2</td>
			<td>description3</td>
	</tr>
	</table>
	</body>
	 
<!--link to database for menu images  -->	
<div id="wrapperfoot">
<footer>
		<small>
			<i>Copyright &copy; 2015 How's Catering</i>
			<br>
			<a href="mailto:webmaster@howscatering.com">webmaster@howscatering.com</a>
		</small>
	</footer>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js\app.js"></script>
</body>

</html>