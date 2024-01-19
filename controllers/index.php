<?php
$heading = "Home";

$config = require('config.php');
$db = new Database($config['database']);
$result = $db->query('
SELECT COUNT(*) AS total_row_count
FROM animal;
')->findOrFail();

$totalRowCount = $result['total_row_count'];


require "views/index.view.php";
