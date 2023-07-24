<?php

use Core\Database;


$config = require base_path('config.php');

$db = new Database($config['database']);


$query = 'select * from notes where id = :id ;';

// we assure to have the note 
$note = $db->query($query, [':id' => $_GET['id']])->findOrFail();

// 2 is the user_Id of the notes table cf notes.php
$currentUser = 2;

authorize($note['user_Id'] ===  $currentUser);

// if delete 
$db->query('DELETE FROM notes WHERE id = :id', [
    ':id' => $_GET['id']
]);

header('location: /notes');
exit();