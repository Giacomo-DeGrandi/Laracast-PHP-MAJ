<?php

use Core\Database;
use Core\App;




$db = App::container()->resolve('Core\Database');

$query = 'select * from notes where user_Id = :id ;';

$notes = $db->query($query, [':id' => 3 ])->get();


// this way i don t access Db anymore

view('notes/index.view.php', [

    'heading' => 'Notes',

    'notes' => $notes

]);