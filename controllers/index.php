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
            Conservation_Status.Conservation_Status_Name
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


require "views/index.view.php";
