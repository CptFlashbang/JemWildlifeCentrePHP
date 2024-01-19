<?php
$heading = "Home";

$config = require('config.php');
$db = new Database($config['database']);
$result = $db->query('
SELECT COUNT(*) AS total_row_count
FROM animal;
')->findOrFail();

$totalRowCount = $result['total_row_count'];

$min = 1;
$max = $totalRowCount; 

$randomNumbers = [];

for ($i = 0; $i < 3; $i++) {
    $randomNumbers[] = rand($min, $max);
}

require "views/index.view.php";
