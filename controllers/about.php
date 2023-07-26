<?php


view('about.view.php', [
    'heading'=>  $_SESSION['user']['email'] ?? 'About us'
]);


