<?php require base_path('views/partials/head.php'); ?>

<?php require base_path('views/partials/nav.php'); ?>

<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto text-3xl max-w-7xl py-6 sm:px-6 lg:px-8">
        <h1>👋 Hello <?= $_SESSION['user']['email'] ?? false ?> !</h1>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>