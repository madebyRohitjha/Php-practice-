<!DOCTYPE html>
<<<<<<< HEAD
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/styles.css" rel="stylesheet">
    <title>Getting Data from a Database</title>
  </head>
  </body>
    <a href="index.php">PHP &amp; MySQL</a>
    <h2>Getting Data from a Database</h2>
    <p><b>NOTE:</b> You must update the <code>cms/includes/database-connection.php</code> file<br>with information about your database for these examples to work.</p>
    <p>The code for this chapter is split into two folders: </p>
    <ul>
      <li><code>cms</code> contains the sample CMS application</li>
      <li><code>examples</code> contains example files</li>
    </ul>
    <table>
      <tr><th>Lab</th><th>Title</th><th>Filename</th></tr>
      <tr><td>1</td><td>Sample Site Home Page<br>(to check <code>database-connection.php</code>)</td><td><a href="cms/index.php">index.php</a></td></tr>
      <tr><td>2</td><td>Getting a Single Row of Data</td><td><a href="examples/query-one-row.php">query-one-row.php</a></td></tr>
      <tr><td>3</td><td>Checking if the Database Returned Data</td><td><a href="examples/checking-for-data.php">checking-for-data.php</a></td></tr>
      <tr><td>4</td><td>Getting Multiple Rows of Data</td><td><a href="examples/query-multiple-rows.php">query-multiple-rows.php</a></td></tr>
      <tr><td>5</td><td>Loops to Show One Row of Data at a Time</td><td><a href="examples/query-multiple-rows-while-loop.php">query-multiple-rows-while-loop.php</a></td></tr>
      <tr><td>6</td><td>Using Placeholders in SQL Queries</td><td><a href="examples/prepared-statement.php">prepared-statement.php</a></td></tr>
      <tr><td>7</td><td>Using <code>bindValue()</code> to Replace Placeholders </td><td><a href="examples/bind-value.php">bind-value.php</a></td></tr>
      <tr><td>8</td><td>Using Query Strings to Show the Right Page</td><td><a href="examples/query-strings.php?id=1">query-strings-and-prepared-statements.php?id=1</a></td></tr>
      <tr><td>9</td><td>Formatting Data in HTML Pages</td><td><a href="examples/formatting-data-in-html.php">formatting-data-in-html.php</a></td></tr>
      <tr><td>10</td><td>Custom PDO Function - No Parameters</td><td><a href="examples/pdo-function-no-parameters.php">pdo-function-no-parameters.php</a></td></tr>
      <tr><td>11</td><td>Custom PDO Function - With Parameters</td><td><a href="examples/pdo-function-with-parameters.php?id=1">pdo-function-with-parameters.php?id=1</a></td></tr>
      <tr><td>12</td><td>Home Page</td><td><a href="cms/index.php">index.php</a></td></tr>
      <tr><td>13</td><td>Category Page</td><td><a href="cms/category.php?id=1">category.php?id=1</a></td></tr>
      <tr><td>14</td><td>Article Page</td><td><a href="cms/article.php?id=1">article.php?id=1</a></td></tr>
      <tr><td>15</td><td>Member Profile Page</td><td><a href="cms/member.php?id=1">member.php?id=1</a></td></tr>
      <tr><td>16</td><td>Search Page</td><td><a href="cms/search.php?term=design">search.php?term=design</a></td></tr>
      <tr><td>17</td><td>Member List Using Objects</td><td><a href="examples/fetching-data-as-objects.php">fetching-data-as-objects.php</a></td></tr>
      <tr><td>18</td><td>Member List Using Class to Create Objects</td><td><a href="examples/fetching-data-into-class.php">fetching-data-into-class.php</a></td></tr>
=======
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <link href="css/index_styles.css" rel="stylesheet">
    <title>PHP &amp; My SQL : Lecture 2</title>
  </head>
  <body>
    <a href="index.php">PHP &amp; MySQL</a>
    <h2> Basic Programming Instructions</h2>
    <table>
      <tr><th>Lab</th><th>Title</th><th>Filename</th></tr>
      <tr><td>1</td><td class="title">Creating and Accessing Variables</td><td class="link"><a href="lab1_variables.php">lab1_variables.php</a></td></tr>
      <tr><td>2</td><td class="title">Updating a Value in a Variable</td><td class="link"><a href="lab2_updating-variables.php">lab2_updating-variables.php</a></td></tr>
      <tr><td>3</td><td class="title">Creating and Accessing Associative Arrays</td><td class="link"><a href="lab3_associative-arrays.php">lab3_associative-arrays.php</a></td></tr>
      <tr><td>4</td><td class="title">Creating and Accessing Indexed Arrays</td><td class="link"><a href="lab4_indexed-arrays.php">lab4_indexed-arrays.php</a></td></tr>
      <tr><td>5</td><td class="title">Multidimensional Arrays</td><td class="link"><a href="lab5_multidimensional-arrays.php">lab5_multidimensional-arrays.php</a></td></tr>
      <tr><td>6</td><td class="title">Changing Values Stored in Arrays</td><td class="link"><a href="lab6_updating-arrays.php">lab6_updating-arrays.php</a></td></tr>
      <tr><td>7</td><td class="title">Using the Shorthand for Echo</td><td class="link"><a href="lab7_echo-shorthand.php">lab7_echo-shorthand.php</a></td></tr>
      <tr><td>8</td><td class="title">Using Arithmetic Operators</td><td class="link"><a href="lab8_arithmetic-operators.php">lab8_arithmetic-operators.php</a></td></tr>
      <tr><td>9</td><td class="title">Joining Together Strings</td><td class="link"><a href="lab9_string-operator.php">lab9_string-operator.php</a></td></tr>
      <tr><td>10</td><td class="title">Using Comparison Operators</td><td class="link"><a href="lab10_comparison-operators.php">lab10_comparison-operators.php</a></td></tr>
      <tr><td>11</td><td class="title">Using Logical Operators</td><td class="link"><a href="lab11_logical-operators.php">lab11_logical-operators.php</a></td></tr>
      <tr><td>12</td><td class="title">Processing and Displaying Data</td><td class="link"><a href="example.php">example.php</a></td></tr>
>>>>>>> 4c9402c8333ac53753d12aea0de083817aecf139
    </table>
  </body>
</html>