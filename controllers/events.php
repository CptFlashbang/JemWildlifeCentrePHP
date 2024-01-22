<?php
$heading = "Events";
$config = require('config.php');
$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$pdo = new PDO($dsn, 'root', '');
$statement = $pdo->prepare("
SELECT
    Event_ID_PK,
    Event_Title,
    Event_Description,
    DATE_FORMAT(Event_Date, '%d-%m-%Y') AS Formatted_Event_Date,
    TIME_FORMAT(Start_Time, '%H:%i') AS Formatted_Start_Time,
    TIME_FORMAT(End_Time, '%H:%i') AS Formatted_End_Time,
    CASE Age_Rating_Fk
        WHEN 1 THEN 'Adults only'
        WHEN 2 THEN 'Suitable for families'
        WHEN 3 THEN 'Suitable for children'
    END AS Age_Rating,
    Event_Notes,
    image_path
FROM
    Event
ORDER BY
    Event_Date, Start_Time;
");
$statement->execute();
$events = $statement->fetchAll(PDO::FETCH_ASSOC);


require "views/events.view.php";
