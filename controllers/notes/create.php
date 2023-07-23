<?php

$config = require('config.php');

$db = new Database($config['database']);


// pull the POST request from url 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //init errors
    $errors = [];

    if (Validator::string($_POST['body'], 3, 1000)) {
        $errors['body'] = 'The body can not be more than 1,000 characters and at least 3';
    }

    if (empty($errors)) {
        $query = 'INSERT INTO notes(body, user_Id) VALUES(:body, :user_id)';
        $db->query($query, [':body' => htmlspecialchars($_POST['body']), ':user_id' => 2]);
    }
}

$heading = "Create Note";

require('views/note-create.view.php');
