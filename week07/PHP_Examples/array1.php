<?php
$products = array( 'Tires', 'Oil', 'Spark Plugs');
for ($i = 0; $i<3; $i++) {
  echo $products[$i]." ";
}
echo "<br>foreach():<br>";

foreach ($products as $current) {
  echo $current." ";
}

?>
