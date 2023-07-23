<?php


$config = require('config.php');

$db = new Database($config['database']);


$query = 'select * from notes where id = :id ;';

$note = $db->query($query, [':id' => $_GET['id'] ])->fetch();


if( ! $note ){
    abort();
}

// 2 is the user_Id of the notes table cf notes.php
$currentUser = 2;
 
if ( $note['user_Id'] !==  $currentUser ) {
    // forbidden
    abort(Response::FORBIDDEN);
}

$heading = "Note";

require 'views/note.view.php';