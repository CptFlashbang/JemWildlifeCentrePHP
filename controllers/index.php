<?php
$heading = "Home";

$config = require('config.php');
$db = new Database($config['database']);
$result = $db->query('
SELECT COUNT(*) AS total_row_count
FROM animal;
')->findOrFail();


require "views/index.view.php";
