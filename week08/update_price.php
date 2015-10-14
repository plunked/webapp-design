<html>
<head>
  <title>Book-O-Rama Book Entry Results</title>
</head>
<body>
<h1>Book-O-Rama Book Entry Results</h1>
<?php
  // create short variable names
  $isbn=$_POST['isbn'];
  $price=$_POST['updatePrice'];

  if ( !$price) {
     echo "You have not entered the price.<br />"
          ."Please go back and try again.";
     exit;
  }

  if (!get_magic_quotes_gpc()) {
    $isbn = addslashes($isbn);
    $price = doubleval($price);
  }

  @ $db = new mysqli('localhost', 'f33ee', 'f33ee', 'f33ee');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

  $query = "UPDATE books SET 
			PRICE = '".$price."' WHERE ISBN = '".$isbn."'";
  $result = $db->query($query);

  if ($result) {
      echo  $db->affected_rows." book updated into database.";
  } else {
  	  echo "An error has occurred.  The item was not updated.";
  }

  $db->close();
?>
</body>
</html>
