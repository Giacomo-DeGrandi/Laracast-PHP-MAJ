<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);


$query = 'select * from notes where id = :id ;';


$note = $db->query($query, [':id' => $_GET['id']])->findOrFail();


// 2 is the user_Id of the notes table cf notes.php
$currentUser = 3;

authorize($note['user_Id'] ===  $currentUser);


view('notes/show.view.php', [

    'heading' => 'Note',

    'note' => $note

]);
