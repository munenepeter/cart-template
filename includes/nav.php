<!-- Nav -->
<header class="text-gray-600 body-font shadow-sm">
    <div class="flex flex-wrap justify-between items-center p-5 mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
        <a href="index.php" class="flex items-center">
            <span class="ml-3 text-xl">Cart Template</span>
        </a>
        <?php if(!isset($_SESSION['logged_in']) ):?>
        <div class="flex items-center">
            <a href="register.php"
                class="mr-6 text-sm font-medium text-gray-500 dark:text-white hover:underline">Register</a>
            <a href="login.php" class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">Login</a>
        </div>
        <?php endif;?>
        <div class="container mx-auto p-2 flex flex-start flex-wrap  flex-col md:flex-row items-center">
            <nav class="md:mr-auto flex flex-wrap items-center text-base justify-center">
                <a href="index.php" class="mr-5 hover:text-gray-900">Home</a>
                <a href="products.php" class="mr-5 hover:text-gray-900">Products</a>
                <a href="cart.php" class="mr-5 hover:text-gray-900">Cart</a>

            </nav>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
</header>