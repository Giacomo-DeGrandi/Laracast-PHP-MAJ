<?php require base_path('views/partials/head.php'); ?>

<?php require base_path('views/partials/nav.php'); ?>

<?php require base_path('views/partials/banner.php'); ?>


<main>

    <form method="POST" class="px-6">
        <div class="space-y-12 px-6">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                        <div class="mt-2">
                            <textarea id="body" name="body" rows="7" class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-200 sm:text-sm">
                                <?php $_POST['body'] ?? "" ?>
                            </textarea>
                        </div>
                        <?php if (!empty($errors['body'])) : ?>
                            <p class="mt-3 text-sm leading-6 text-red-600"> <?= $errors['body'] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/notes" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <input type="hidden" name="__method" value="PATCH"></button>
            <input type="hidden" name="id" value="<?= $note['id'] ?>  ?>"></button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600">Update</button>
        </div>
    </form>





</main>

<?php require base_path('views/partials/footer.php'); ?>