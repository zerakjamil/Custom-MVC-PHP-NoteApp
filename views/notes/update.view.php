<?php
view('partials/header.php');
view('partials/nav.php');
view('partials/banner.php', [
    'heading' => 'Update Your Note',
]);
?>
<main class="max-w-4xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow-md rounded-md p-6">
        <form method="post" class="space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" autocomplete="off"
                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                       value="<?= $_POST['title'] ?? $note['title'] ?>">
                <?php if(isset($errors['title'])): ?>
                    <p class="mt-2 text-sm text-red-600"><?= $errors['title'] ?></p>
                <?php endif; ?>
            </div>
            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="body" name="body" rows="3"
                          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"><?= $_POST['body'] ?? $note['body'] ?></textarea>
                <?php if(isset($errors['body'])): ?>
                    <p class="mt-2 text-sm text-red-600"><?= $errors['body'] ?></p>
                <?php endif; ?>
                <input type="hidden" value="PUT" name="_method">
                <input type="hidden" value="<?= $_GET['id'] ?>" name="id">
            </div>
            <div class="flex justify-end">
                <a href="/note?id=<?= $_GET['id'] ?>" type="button"
                   class="inline-flex items-center mr-3 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                >
                    Cancel
                </a>
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Update
                </button>
            </div>
        </form>
    </div>
</main>
<?php view('partials/footer.php'); ?>

