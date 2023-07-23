<?php


$config = require('config.php');

$db = new Database($config['database']);


$id = 1;

$query = 'select * from notes where user_Id = :id ;';

$notes = $db->query($query, [':id' => $id ])->fetchAll();


$heading = "Notes";

require 'views/notes.view.php';