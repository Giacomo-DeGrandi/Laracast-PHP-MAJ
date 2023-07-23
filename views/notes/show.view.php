<?php require base_path('views/partials/head.php'); ?>

<?php require base_path('views/partials/nav.php'); ?>

<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="text-center shadow-md bg-white rounded-md px-3 py-2">
        <div class="px-3 py-1 text-xl">
            - <?= $note['body'] ?> <br>
        </div>
    </div>

</main>

<?php require base_path('views/partials/footer.php'); ?> 