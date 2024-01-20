<?php
$heading = "Events";
$config = require('config.php');
$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$pdo = new PDO($dsn, 'root', '');
$statement = $pdo->prepare("
SELECT
    Event_Title,
    Event_Description,
    DATE_FORMAT(Event_Date, '%d-%m-%Y') AS Formatted_Event_Date,
    TIME_FORMAT(Start_Time, '%H:%i') AS Formatted_Start_Time,
    TIME_FORMAT(End_Time, '%H:%i') AS Formatted_End_Time,
    CASE Age_Rating_Fk
        WHEN 1 THEN 'Adults'
        WHEN 2 THEN 'Family'
        WHEN 3 THEN 'Children'
    END AS Age_Rating,
    Event_Notes
FROM
    Event;
");
$statement->execute();
$events = $statement->fetchAll(PDO::FETCH_ASSOC);


require "views/events.view.php";
