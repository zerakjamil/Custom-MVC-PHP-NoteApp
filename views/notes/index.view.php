<?php
view('partials/header.php');
view('partials/nav.php');
view('partials/banner.php', [
    'heading' => 'My Notes',
]);
?>
<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <?php if (empty($notes)) : ?>
        <div class="text-center mt-8">
            <p class="text-gray-800 text-lg">You haven't taken any notes yet. Create one now!</p>
        </div>
            <div class="flex justify-center mt-4">
                <a href="/notes/create" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Create a Note
                </a>
            </div>
    <?php else : ?>
        <div class="flex justify-center mt-4">
            <a href="/notes/create" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Create a Note
            </a>
        </div>
        <div class="flex flex-wrap mt-8">
            <?php foreach ($notes as $note) : ?>
                <a href="/note?id=<?= $note['id'] ?>" class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
                    <div class="bg-white border border-gray-200 rounded-lg shadow-md p-4 transition-transform transform hover:scale-105">
                        <h5 class="text-lg font-semibold mb-2"><?= htmlSpecialCharWithLenght($note['title'],28) ?></h5>
                        <p class="text-gray-700"><?= htmlSpecialCharWithLenght($note['body'],15) ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</main>
<?php view('partials/footer.php'); ?>
