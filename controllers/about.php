<?php


view('about.view.php', [
    'heading'=> 'Hello '.$_SESSION['user']['email'] ?? 'About us'
]);


