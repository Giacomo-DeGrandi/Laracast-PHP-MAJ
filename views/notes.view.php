<?php require('partials/head.php'); ?>

<?php require('partials/nav.php'); ?>

<?php require('partials/banner.php'); ?>

<main>


    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note => $values) : ?>
                <li>
                    <a href="/note?id=<?= $values['id'] ?>" class="hover:drop-shadow-xl">
                        <div class="shadow-md bg-white rounded-md px-3 py-2 text-sm font-medium">
                            - <?= $values['body'] ?> <br>
                        </div>
                    </a>

                </li>
                <br>
            <?php endforeach; ?>
        </ul>
    </div>



</main>

<?php require('partials/footer.php'); ?>