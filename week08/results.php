<html>
<head>
  <title>Book-O-Rama Search Results</title>
</head>
<body>
<h1>Book-O-Rama Search Results</h1>
<?php
  // create short variable names
  $searchtype=$_REQUEST['searchtype'];
  $searchterm=trim($_REQUEST['searchterm']);
  $updatePrice=trim($_REQUEST['inputPrice']);

  if (!$searchtype || !$searchterm) {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }

  if (!get_magic_quotes_gpc()){
    $searchtype = addslashes($searchtype);
    $searchterm = addslashes($searchterm);
  }

  @ $db = new mysqli('localhost', 'f33ee', 'f33ee', 'f33ee');

  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }
   

  $query = "select * from books where ".$searchtype." like '%".$searchterm."%'";
  $result = $db->query($query);

  $num_results = $result->num_rows;

  

  echo "<p>Number of books found: ".$num_results."</p>";

  for ($i=0; $i <$num_results; $i++) {
     $row = $result->fetch_assoc();
     echo "<p><strong>".($i+1).". Title: ";
     echo htmlspecialchars(stripslashes($row['title']));
     echo "</strong><br />Author: ";
     echo stripslashes($row['author']);
     echo "<br />ISBN: ";
     echo stripslashes($row['isbn']);
     echo "<br />Price: ";
     echo stripslashes($row['price']);
     echo "</p>";
  }
  $updateQuery = "UPDATE books SET price=".$updatedPrice."where".$row."=1";
  $result1 = $db->query($updateQuery);
  print $result1;

  $result->free();
  $db->close();

?>
<form action="" method="post">
<input type="submit" name="updatePrice" value="Update Price">
<input type="text" name="inputPrice">
</form>
</body>
</html>
