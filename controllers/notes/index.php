<?php


$config = require base_path('config.php');

$db = new Database($config['database']);


$id = 2;

$query = 'select * from notes where user_Id = :id ;';

$notes = $db->query($query, [':id' => $id ])->get();


// this way i don t access Db anymore

view('notes/index.view.php', [

    'heading' => 'Notes',

    'notes' => $notes

]);