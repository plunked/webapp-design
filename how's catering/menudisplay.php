<body>
<?php
  $link = mysql_connect("root", "password", "f33ee");
  mysql_select_db("dvddb");
  $sql = "SELECT dvdimage FROM dvd WHERE id=1";
  $result = mysql_query("$sql");
  mysql_close($link);

?>
<img src="" width="175" height="200" />
</body>