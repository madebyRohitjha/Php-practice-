<?php 
#Step 1
$nutrition = [
    'fat'   => 38, 
    'sugar' => 51, 
    'salt'  => 0.25,



    
];
$nutrition['fat']   = 36;  #Step 2
$nutrition['fiber'] = 2.1; #Step 3
$nutrition['protein'] = 7.3;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Updating Arrays</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Nutrition (per 100g)</h2>
    <!-- #step 4 -->
    <p>Fat:   <?php echo $nutrition['fat']; ?>%</p>
    <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
    <p>Salt:  <?php echo $nutrition['salt']; ?>%</p>
    <p>Fiber: <?php echo $nutrition['fiber']; ?>%</p>
    <p>Protein: <?php echo $nutrition['protein']; ?>%</p> 
  </body>
</html>