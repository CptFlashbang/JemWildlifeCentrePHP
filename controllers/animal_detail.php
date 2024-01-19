<?php
$heading = "Animal Detail". $animal['title'] . " with ID: " . htmlspecialchars($_GET['id']);
$config = require('config.php');
$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$pdo = new PDO($dsn, 'root', '');
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
    Animal.ID = :id', 
['id' => $_GET['id']]
)->findOrFail();
require "views/animal.view.php";
?>
