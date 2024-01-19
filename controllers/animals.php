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
    Conservation_Status.Conservation_Status_Name
FROM
    Animal A
JOIN Species_Information ON A.Species_ID_FK = S.Species_ID_PK
JOIN Conservation_Status ON S.Conservation_Status_FK = CS.Conservation_Status_PK
");
$statement->execute();
$animals = $statement->fetchAll(PDO::FETCH_ASSOC);
require "views/animals.view.php";
