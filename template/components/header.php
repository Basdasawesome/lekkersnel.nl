<?php
$navItems = [
    'Home' => 'home',
    'Over ons' => 'about',
    'Recepten' => 'recepten',
    'Contact' => 'contact'
];

$currentPage = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>LekkerSnel.nl</title>
</head>
<body>

<nav class="h-[72px] w-full border-b border-gray-200 bg-white z-50">
    <div class="container mx-auto px-4 flex justify-between items-center py-3">
        <!-- Logo -->
        <a href="?page=home" class="flex items-center">
            <img src="img/logo.png" alt="logo" class="w-12 h-12">
        </a>

        <!-- Menu + Profiel -->
        <div class="flex items-center gap-6">
            <!-- Desktop  -->
            <div id="menu" class="hidden lg:flex gap-10">
                <?php foreach ($navItems as $label => $page): ?>
                    <a href="?page=<?= $page ?>" 
                        class="nav-link text-gray-500 text-base font-medium hover:text-gray-400 transition-all <?= $currentPage === $page ? 'active' : '' ?>">
                        <?= $label ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Profiel -->
            <div class="relative">
                <button id="profile-btn" class="flex items-center focus:outline-none">
                    <img src="https://placehold.co/400" alt="User Profile" class="w-8 h-8 rounded-full">
                </button>
                <!-- Dropdown-menu -->
                <div id="profile-dropdown" class="hidden absolute right-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-lg">
                    <a href="?page=profiel" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profiel</a>
                    <a href="?page=logout" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Uitloggen</a>
                </div>
            </div>

            <!-- Hamburger -->
            <button id="menu-toggle" type="button" class="lg:hidden p-2 text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobiel -->
    <div id="mobile-menu" class="hidden lg:hidden absolute top-full left-0 w-full bg-white border-t border-gray-200">
        <div class="flex flex-col items-center py-4 gap-4">
            <?php foreach ($navItems as $label => $page): ?>
                <a href="?page=<?= $page ?>" 
                   class="nav-link text-gray-500 text-base font-medium hover:text-green-700 transition-all <?= $currentPage === $page ? 'active' : '' ?>">
                    <?= $label ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>
<script src="js/script.js"></script>
</body>
</html>