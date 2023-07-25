<?php

use Core\Validator;
use Core\Database;
use Core\App;

$db = App::resolve(Database::class);



//init errors
$errors = [];

// pull the POST request from url 
if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {


    if (Validator::string($_POST['body'], 3, 1000)) {
        $errors['body'] = 'The body can not be more than 1,000 characters and at least 3';
    }

    if (empty($errors)) {

        $query = 'UPDATE notes SET body=:body WHERE id=:id";';
        $db->query($query, [':body' => htmlspecialchars($_POST['body']), ':id' => $_POST['id']]);
    }


    header('location: \notes');
    die();
}