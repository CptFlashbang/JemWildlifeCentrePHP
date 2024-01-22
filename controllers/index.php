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
foreach ($randomNumbers as $randomNumber) {
    $animal = $db->query('
        SELECT
            Animal.*,
            Species_Information.Genus,
            Species_Information.Species,
            Species_Information.Common_Name,
            Conservation_Status.Conservation_Status_Name,
            Species_information.image_path
        FROM
            Animal
        JOIN Species_Information ON Animal.Species_ID_FK = Species_Information.Species_ID_PK
        JOIN Conservation_Status ON Species_Information.Conservation_Status_FK = Conservation_Status.Conservation_Status_PK
        WHERE
            Animal.Animal_ID_PK = :id', 
        ['id' => $randomNumber]
    )->findOrFail();
    $animals[] = $animal;
}

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
    Event_Date, Start_Time
LIMIT 3
");
$statement->execute();
$events = $statement->fetchAll(PDO::FETCH_ASSOC);

require "views/index.view.php";
