<?php require('partials/head.php'); ?>

<?php require('partials/nav.php'); ?>

<?php require('partials/banner.php'); ?>

<main>
    <div class="text-center shadow-md bg-white rounded-md px-3 py-2">
        <div class="px-3 py-1 text-xl">
            - <?= $note['body'] ?> <br>
        </div>
        <i class="text-sm font-small text-indigo-500"> by <?= $note['user_Id'] ?></i>
    </div>

</main>

<?php require('partials/footer.php'); ?>