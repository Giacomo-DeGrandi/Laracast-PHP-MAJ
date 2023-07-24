<?php require base_path('views/partials/head.php'); ?>

<?php require base_path('views/partials/nav.php'); ?>

<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="text-center shadow-md bg-dark rounded-md px-3 py-2">
        <div class="px-6 py-5 text-xl">
            - <?= $note['body'] ?> <br>
        </div>
    </div>

    <form method="POST">
        <button type="hidden" name="id" value="<?= $note['id'] ?>  ?>"></button>
        <button type="submit" class="text-red-500"> Delete </button>
    </form>

</main>

<?php require base_path('views/partials/footer.php'); ?>