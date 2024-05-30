<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<main class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md">
        <div class="flex items-center justify-center mb-6">
            <svg class="h-12 w-12 text-red-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
            <h1 class="text-3xl font-bold text-gray-800">404 Not Found</h1>
        </div>
        <p class="text-lg text-gray-700 mb-4">Oops! The page you are looking for does not exist.</p>
        <p class="text-gray-600 mb-6">Please check the URL or go back to the homepage.</p>
        <div class="text-center">
            <a href="/" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block">Go Home</a>
        </div>
    </div>
</main>

<?php require('partials/footer.php'); ?>
