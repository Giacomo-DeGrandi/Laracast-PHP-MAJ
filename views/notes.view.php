<?php require('partials/head.php'); ?>

<?php require('partials/nav.php'); ?>

<?php require('partials/banner.php'); ?>

<main>


    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note => $v) : ?>
                <li class="bg-gray-900 text-white  hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                    <a href="#">
                        - <?= $v['body'] ?> <br>
                        <i class="small"> by <?= $v['user_Id'] ?></i>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>



</main>

<?php require('partials/footer.php'); ?>