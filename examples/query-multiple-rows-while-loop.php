<?php
require '../cms/includes/database-connection.php';
require '../cms/includes/functions.php';
$sql       = "SELECT forename, surname
                FROM member ORDER BY surname;";
$statement = $pdo->query($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Getting multiple rows of data with a while loop</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
  </head>
  <body>
    
    <?php $count = 0; while ($row = $statement->fetch()) { $count++?>
      
      <p>
        <?= html_escape($row['forename']) ?>
        <?= html_escape($row['surname']) ?>
      </p>
      
     <?php }  echo "<p>Total members: $count</p>";?>
    
  </body>
</html>
