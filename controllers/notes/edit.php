<?php


use Core\Database;
use Core\App;

$db = App::resolve(Database::class);


$query = 'select * from notes where id = :id ;';

// we assure to have the note 
$note = $db->query($query, [':id' => $_GET['id']])->findOrFail();

// 2 is the user_Id of the notes table cf notes.php
$currentUser = 3;

authorize($note['user_Id'] ===  $currentUser);

view('notes/edit.view.php', [

    'heading' => 'Edit Note',

    'errors' => [],

    'note' => $note
]);


/*


if (Validator::string($_POST['body'], 3, 1000)) {
        $errors['body'] = 'The body can not be more than 1,000 characters and at least 3';
}

if (empty($errors)) {

 $query = 'UPDATE notes SET body=:body WHERE id=:id";';
  $db->query($query, [':body' => htmlspecialchars($_POST['body']), ':id' => $_POST['id']]);
    }


    */