<?php
$heading = "Search event's";
$events = [];
$records="";
$return="";
if(isset($_GET['Event_Title']) && !empty($_GET['Event_Title'])){
    $return="search?title=".htmlspecialchars($_GET['Event_Title']);
    $config = require('config.php');
    $db = new Database($config['database']);
    $query = "select * from event where Event_Title like :Event_Title";
    $filter = "%".htmlspecialchars($_GET['Event_Title'])."%";
    $events = $db->query($query, ['Event_Title' => $filter])->get();
    if (count($events) == 0) {
        $records = "You have found no matches, please try again";
    } else
    {
        $records = "You have found ". count($events) . " records from your search";
    }
}
require "views/search.view.php";
