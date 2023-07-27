// log if creds

<?php

use Core\Validator;
use Core\Database;
use Core\App;


//init errors
$errors = [];



if (!Validator::email($_POST['email'])) {
    $errors['email'] = "Please provide a valid email adress";
}
                        
if (!Validator::string($_POST['password'], 5, 25)) {
    $errors['password'] = "Please provide a password between 5 and 25 characters";
}


if (!empty($errors)) {

    return view('registration/create.view.php', [

        'heading' => 'Register',

        'errors' => $errors

    ]);
}



$db = App::resolve(Database::class);

$query = 'select * from users where email = :email ;';

$user = $db->query($query, [':email' => $_POST['email']])->find();

dd($user);