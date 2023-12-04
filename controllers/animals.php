<?php
$heading = "Animals";
$config = require('config.php');
$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$pdo = new PDO($dsn, 'root', '');
$statement = $pdo->prepare("
SELECT
    A.*,
    S.Genus,
    S.Species,
    S.Common_Name,
    CS.Conservation_Status_Name
FROM
    Animal A
JOIN
    Species_Information S ON A.Species_ID_FK = S.Species_ID_PK
JOIN
    Conservation_Status CS ON S.Conservation_Status_FK = CS.Conservation_Status_PK
");
$statement->execute();
$animals = $statement->fetchAll(PDO::FETCH_ASSOC);
require "views/animals.view.php";
