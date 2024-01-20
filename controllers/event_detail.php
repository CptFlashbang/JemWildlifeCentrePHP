<?php
$config = require('config.php');
$db = new Database($config['database']);
$event = $db->query('
SELECT
    *
FROM
    Event
WHERE
    Event_ID_PK = :id', 
['id' => $_GET['id']]
)->findOrFail();
$heading = "Event Detail". $event['Event_Title'] . " with ID: " . htmlspecialchars($_GET['id']);
require "views/event_detail.view.php";
?>
