<?php 
$offers = [
    ['name' => 'Toffee', 'price' => 5, 'stock' => 120,],
    ['name' => 'Mints',  'price' => 3, 'stock' => 66,],
    ['name' => 'Fudge',  'price' => 4, 'stock' => 97,],
    ['name' => 'Chocolate', 'price' => 2, 'stock' => 83],
];

$members = [ 
  ['name' => 'Ivy', 'age' => 32, 'country' => 'UK'], 
  ['name' => 'Emi', 'age' => 24, 'country' => 'Japan'], 
  ['name' => 'Luke', 'age' => 47, 'country' => 'USA'] 
];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Multidimensional Arrays</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    
    <h2>Offers</h2>
    <p><?php echo $offers[0]['name']; ?> - 
     $<?php echo $offers[0]['price']; ?></p>
    <p><?php echo $offers[1]['name']; ?> - 
     $<?php echo $offers[1]['price']; ?></p>
    <p><?php echo $offers[2]['name']; ?> - 
     $<?php echo $offers[2]['price']; ?></p>
    <p><?php echo $offers[3]['name']; ?> - 
     $<?php echo $offers[3]['price']; ?></p>

    <h2>Members</h2>
    <p><?php echo $members[0]['name']; ?> (<?php echo $members[0]['age']; ?>) - <?php echo $members[0]['country']; ?></p>
    <p><?php echo $members[1]['name']; ?> (<?php echo $members[1]['age']; ?>) - <?php echo $members[1]['country']; ?></p>
    <p><?php echo $members[2]['name']; ?> (<?php echo $members[2]['age']; ?>) - <?php echo $members[2]['country']; ?></p>
  </body>
</html>
