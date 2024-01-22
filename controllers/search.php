<?php
$heading = "Search event's";
$events = [];
$records = "";
$return = "";

if (isset($_GET['search']) && !empty($_GET['search'])) {
    $searchTerm = htmlspecialchars($_GET['search']);
    $return = "search?search=" . $searchTerm;

    $config = require('config.php');
    $db = new Database($config['database']);
    $query = "SELECT event.*, age_ratings.Event_Rating
              FROM event
              LEFT JOIN age_ratings ON event.Age_Rating_FK = age_ratings.Age_Rating_PK
              WHERE event.Event_Title LIKE :searchTerm 
              OR event.Event_Description LIKE :searchTerm 
              OR age_ratings.Event_Rating LIKE :searchTerm";

    $filter = "%" . $searchTerm . "%";
    $events = $db->query($query, ['searchTerm' => $filter])->get();

    if (count($events) == 0) {
        $records = "You have found no matches, please try again";
    } else {
        $records = "You have found " . count($events) . " records from your search";
    }
}
require "views/search.view.php";
