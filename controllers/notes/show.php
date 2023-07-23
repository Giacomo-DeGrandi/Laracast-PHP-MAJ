<?php


$config = require base_path('config.php');

$db = new Database($config['database']);


$query = 'select * from notes where id = :id ;';



$note = $db->query($query, [':id' => $_GET['id'] ])->find();


if( ! $note ){
    abort();
}

// 2 is the user_Id of the notes table cf notes.php
$currentUser = 2;
 
if ( $note['user_Id'] !==  $currentUser ) {
    // forbidden
    abort(Response::FORBIDDEN);
}


view('notes/show.view.php', [

    'heading' => 'Note',

    'note' => $note

]);