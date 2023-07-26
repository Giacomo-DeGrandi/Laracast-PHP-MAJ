<?php


view('about.view.php', [
    'heading'=> 'Hello '.$_SESSION['user'] ?? 'About us'
]);


