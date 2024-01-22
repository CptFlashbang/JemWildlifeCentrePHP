<?php
$heading = "Animals";
$config = require('config.php');
$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$pdo = new PDO($dsn, 'root', '');
$statement = $pdo->prepare("
SELECT
    Animal.*,
    Species_Information.Genus,
    Species_Information.Species,
    Species_Information.Common_Name,
    Conservation_Status.Conservation_Status_Name,
    CASE Animal.Sex
        WHEN 'M' THEN 'Male'
        WHEN 'F' THEN 'Female'
        ELSE 'Unknown'
    END AS Sex,    
    Species_information.image_path
FROM
    Animal
JOIN Species_Information ON Animal.Species_ID_FK = Species_Information.Species_ID_PK
JOIN Conservation_Status ON Species_Information.Conservation_Status_FK = Conservation_Status.Conservation_Status_PK
");
$statement->execute();
$animals = $statement->fetchAll(PDO::FETCH_ASSOC);
require "views/animals.view.php";
