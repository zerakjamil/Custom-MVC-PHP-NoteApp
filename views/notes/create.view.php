<?php
view('partials/header.php');
view('partials/nav.php');
view('partials/banner.php', [
    'heading' => 'Create a Note',
]);
?>
<main class="max-w-4xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow-md rounded-md p-6">
        <form method="post" class="space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" autocomplete="off"
                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                       value="<?= $_POST['title'] ?? '' ?>">
                <?php if(isset($_SESSION['errors']['title'])): ?>
                    <p class="mt-2 text-lg text-red-600"><?= $_SESSION['errors']['title'] ?></p>
                <?php endif; ?>
            </div>
            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="body" name="body" rows="3"
                          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"><?= $_POST['body'] ?? '' ?></textarea>
                <?php if(isset($_SESSION['errors']['body'])): ?>
                    <p class="mt-2 text-sm text-red-600"><?= $_SESSION['errors']['body'] ?></p>
                <?php endif; ?>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create
                </button>
            </div>
        </form>
    </div>
</main>
<?php view('partials/footer.php'); ?>
