<?php
$config = require('config.php');
$db = new Database($config['database']);
$book = $db->query('select * from animals where ID = :id', ['id' => $_GET['id']])->findOrFail();
$heading = "Chosen Book " . $book['title'] . " with ID: " . htmlspecialchars($_GET['id']);
$returnURL = $_GET['return'];
require "views/book.view.php";
