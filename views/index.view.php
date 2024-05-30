<?php
require('partials/header.php');
require('partials/nav.php');
require('partials/banner.php');
?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to Our Note Taking Application</h1>

            <?php if ($_SESSION['user'] ?? false):?>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 inline-block mt-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            <p>You are authorized have fun taking notes!</p>
            <?php else:?>
                <div class="flex justify-center space-x-4">
                    <a href="/login" class="bg-white text-gray-800 py-2 px-4 rounded-md border border-gray-300 hover:bg-gray-100 transition duration-300 ease-in-out">Login</a>
                    <a href="/register" class="bg-gray-700 text-white py-2 px-4 rounded-md hover:bg-gray-800 transition duration-300 ease-in-out">Register</a>
                </div>
            <?php endif;?>
        </div>
    </div>
</main>
<?php require('partials/footer.php'); ?>
