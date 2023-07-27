<?php

// log if creds

use Core\Validator;
use Core\Database;
use Core\App;


//init errors
$errors = [];

$email = $_POST['email'];
$password = $_POST['password'];

if (!Validator::email($email)) {
    $errors['email'] = "Please provide a valid email adress";
}
                        
if (!Validator::string($password, 5, 25)) {
    $errors['password'] = "Please provide a password between 5 and 25 characters";
}


if (!empty($errors)) {

    return view('sessions/create.view.php', [

        'heading' => 'Log in',

        'errors' => $errors

    ]);
}



$db = App::resolve(Database::class);

$query = 'select * from users where email = :email ;';

$user = $db->query($query, [':email' => $_POST['email']])->find();

if(!$user){

    return view('sessions/create.view.php', [

        'heading' => 'Log in',

        'errors' => [

            'email' => 'No matching accounts found for this email adress'
        ]

    ]);
}


if(password_verify($_POST['password'], $user['password'])){

    login($user);

    header('location: /');
    die();
}

return view('sessions/create.view.php', [

    'heading' => 'Log in',

    'errors' => [

        'email' => 'No matching accounts found for this email adress and password'
    ]

]);
 