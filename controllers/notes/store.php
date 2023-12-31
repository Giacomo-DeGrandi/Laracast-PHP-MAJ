<?php

use Core\Validator;
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);


//init errors
$errors = [];

// pull the POST request from url 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (!Validator::string($_POST['body'], 3, 1000)) {
        $errors['body'] = 'The body can not be more than 1,000 characters and at least 3';
    }

    if (empty($errors)) {
        $query = 'INSERT INTO notes(body, user_Id) VALUES(:body, :user_id)';
        $db->query($query, [':body' => htmlspecialchars($_POST['body']), ':user_id' => 3  ]);

        header('location: \notes');
        die();

    } else {

        return view("notes/create.view.php", [
            'heading' => 'Create Note',
            'errors' => $errors
        ]);
    }


}