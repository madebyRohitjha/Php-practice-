<?php
$student = ["name" => "Mina", "age" => 20];
$result = array_keys($student);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>array_keys() - Array</title>
  <style>body{font-family:Arial,sans-serif;background:#f4f6f8;color:#222;margin:0;padding:32px}main{max-width:900px;margin:auto;background:white;padding:28px;border-radius:10px;box-shadow:0 2px 10px #0001}h1{color:#17365d}h2{color:#24527a}table{border-collapse:collapse;width:100%;margin:20px 0}th,td{border:1px solid #ccd4dc;padding:12px;text-align:left}th{background:#eaf1f7}a{color:#145da0}li{margin:10px 0}.back{margin-top:24px}</style>
</head>
<body><main>
  <h1>PHP Built-in Functions</h1>
  <h2>array_keys()</h2>
  <table>
    <tr><th>Function</th><th>Input</th><th>How to use</th><th>Output</th></tr>
    <tr><td>array_keys()</td><td>["name" => "Mina", "age" => 20]</td><td><code>array_keys($student)</code></td><td><?= htmlspecialchars((string)(implode(', ', $result)), ENT_QUOTES, 'UTF-8') ?></td></tr>
  </table>
  <p class="back"><a href="index.php">Back to Built-in Functions</a></p>
</main></body></html>
