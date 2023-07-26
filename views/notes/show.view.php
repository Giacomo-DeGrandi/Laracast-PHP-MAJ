<?php require base_path('views/partials/head.php'); ?>

<?php require base_path('views/partials/nav.php'); ?>

<?php require base_path('views/partials/banner.php'); ?>

<main>




    <div class="space-y-12 px-6">

        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-full">
                    <div class="text-center shadow-md bg-dark rounded-md px-3 py-2">
                        <div class="px-6 py-5 text-xl">
                            <?= htmlspecialchars($note['body']) ?> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">

            <a href="/notes" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>

            <a href="note/edit?id=<?= $note['id'] ?>" class="rounded-md bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500">Edit </a>

            <form method="POST">
                <input type="hidden" name="__method" value="DELETE"></button>
                <input type="hidden" name="id" value="<?= $note['id'] ?>  ?>"></button>
                <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500"> Delete </button>
            </form>
        </div>

    </div>


</main>

<?php require base_path('views/partials/footer.php'); ?>