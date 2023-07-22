<?php

require 'functions.php';

// require 'router.php';


require 'Database.php';

$db = new Database();


dd($db->query('select * from Posts'));



?>