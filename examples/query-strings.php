<?php
require '../cms/includes/database-connection.php';
require '../cms/includes/functions.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {                            // If no id
    include 'page-not-found.php';      // Page not found
}

$sql       = "SELECT forename, surname 
                FROM member 
               WHERE id = :id;";       // SQL query
$statement = $pdo->prepare($sql);      // Prepare
$statement->execute([':id' => $id]);   // Execute
$member    = $statement->fetch();      // Get data

if (!$member) {                        // If no data
    include 'page-not-found.php';      // Page not found
}

echo"<p><a href='?id=1'>lvy Stone</a>|";
echo"<p><a href='?id=2'>Luke Wood</a>|";
echo"<p><a href='?id=3'>Emiko lto</a></p>";

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Query strings and prepared statements</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
  </head>
  <body>
    <p>
      <?= html_escape($member['forename']) ?>
      <?= html_escape($member['surname']) ?>
    </p>
  </body>
</html>