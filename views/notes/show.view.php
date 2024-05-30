<?php
view('partials/header.php');
view('partials/nav.php');
view('partials/banner.php', [
    'heading' => 'Note',
]);
?>
<main class="max-w-4xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow-md rounded-md p-6">
        <p class="text-lg font-semibold mb-4"><?=htmlspecialchars($note['title'])?></p>
        <p><?=htmlspecialchars($note['body'])?></p>

        <div class="flex items-center space-x-4 mt-6">
            <!-- Go Back Link -->
            <a href="/notes" class="inline-flex items-center border border-gray-300 rounded-md px-3 py-2 text-blue-600 hover:bg-gray-100 transition-colors duration-200">
                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Go back
            </a>

            <!-- Delete Button -->
            <form method="POST" class="inline-block">
                <input type="hidden" name="id" value="<?=$note['id'];?>">
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="inline-flex items-center border border-transparent rounded-md px-3 py-2 text-sm font-medium leading-5 text-red-500 bg-red-100 hover:bg-red-200 focus:outline-none focus:border-red-300 focus:ring focus:ring-red-200 focus:ring-opacity-50 transition-colors duration-200">
                    <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    Delete
                </button>
            </form>

            <!-- Edit Button -->
            <a href="/notes/edit?id=<?=$note['id']?>" class="inline-flex items-center border border-transparent rounded-md px-3 py-2 text-sm font-medium leading-5 text-blue-600 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 transition-colors duration-200">
                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Edit
            </a>
        </div>
    </div>
</main>
<?php view('partials/footer.php'); ?>
