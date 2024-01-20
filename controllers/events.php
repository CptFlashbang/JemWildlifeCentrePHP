<?php
$heading = "Events";
$config = require('config.php');
$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$pdo = new PDO($dsn, 'root', '');
$statement = $pdo->prepare("
SELECT
    *
FROM
    Event
");
$statement->execute();
$events = $statement->fetchAll(PDO::FETCH_ASSOC);


require "views/events.view.php";
