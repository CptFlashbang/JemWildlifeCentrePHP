<?php
$heading = "Animal Detail";
$config = require('config.php');
$db = new Database($config['database']);
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
$heading = "Animal Detail". $animal['Name'] . " with ID: " . htmlspecialchars($_GET['id']);
require "views/animal_detail.view.php";
?>
