<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo (if applicable) -->
            <!--  -->

            <!-- Desktop Menu -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-center space-x-4">
                    <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <?php if ($_SESSION['user'] ?? false):?>
                        <a href="/notes" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Notes</a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Register and Login Links -->
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <?php if($_SESSION['user'] ?? false): ?>
                    <form method="post" action="/logout">
                        <button type="submit" class="text-white px-3 py-2 rounded-md text-sm font-medium">Log out</button>
                    </form>

                    <?php else: ?>
                        <a href="/register" class="text-white px-3 py-2 rounded-md text-sm font-medium">Register</a>
                        <a href="/login" class="text-white px-3 py-2 rounded-md text-sm font-medium">Login</a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="flex md:hidden">
                <button type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Items -->
    <div class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
            <?php if (isset($_SESSION['user'])):?>
                <a href="/notes" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Notes</a>
            <?php endif; ?>
            <?php if($_SESSION['user'] ?? false): ?>
                <a href="/register/logout" class="text-white block px-3 py-2 rounded-md text-base font-medium">Log out</a>
            <?php else: ?>
                <a href="/register" class="text-white block px-3 py-2 rounded-md text-base font-medium">Register</a>
                <a href="/login" class="text-white block px-3 py-2 rounded-md text-base font-medium">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
