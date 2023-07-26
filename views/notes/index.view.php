<?php require base_path('views/partials/head.php'); ?>

<?php require base_path('views/partials/nav.php'); ?>

<?php require base_path('views/partials/banner.php'); ?>

<main>


    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <a href="/notes/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create a note</a>
        <br>
        <div class="px-6 py-6  flex-row flex">
            <?php foreach ($notes as $note => $values) : ?>
                <div class="w-1/5">
                    <div class="mb-10 ml-6 max-w-md rounded-lg bg-neutral-50 p-6 shadow-md shadow-black/5 ">
                        <p class="mb-6 text-neutral-700">
                            <?= htmlspecialchars($values['body']) ?>
                        </p>
                        <a href="/note?id=<?= $values['id'] ?>" class="text-neutral-700 text-xs">
                            Read
                        </a>
                    </div>
                </div>
                <br>
            <?php endforeach; ?>
        </div>
    </div>


</main>

<?php require base_path('views/partials/footer.php'); ?>