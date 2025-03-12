<?php

include_once '../template/components/header.php';

if (isset($_SESSION['error'])) {
    echo '<div class="error-message">'.$_SESSION['error'].'</div>';
    unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
    echo '<div class="success-message">'.$_SESSION['success'].'</div>';
    unset($_SESSION['success']);
}
?>

<div class="flex items-center justify-center min-h-[calc(100vh-72px)] bg-gray-100 px-4">
    <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg text-center">
        <div class="flex justify-center mb-4">
            <img src="img/logo.png" alt="Logo" class="h-12">
        </div>
        <h2 class="text-lg sm:text-xl font-semibold mb-6">Registreer</h2>
        <form method="POST" action="">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="text-left">
                    <label class="block text-gray-700 text-sm font-medium mb-1">Gebruikersnaam</label>
                    <input type="text" name="username" placeholder="John Doe" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                </div>
                <div class="text-left">
                    <label class="block text-gray-700 text-sm font-medium mb-1">Email</label>
                    <input type="email" placeholder="johndoe@gmail.com" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                </div>
                <div class="text-left">
                    <label class="block text-gray-700 text-sm font-medium mb-1">Wachtwoord</label>
                    <input type="password" placeholder="Wachtwoord" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                </div>
                <div class="text-left">
                    <label class="block text-gray-700 text-sm font-medium mb-1">Herhaal Wachtwoord</label>
                    <input type="password" placeholder="Herhaal wachtwoord" name="repeatpassword" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 text-sm">
                </div>
            </div>
            <p class="text-sm text-gray-800 mt-4">
                <a href="?page=login" class="hover:underline">Al een account? Klik hier</a>
            </p>
            <div class="mt-4 flex flex-col gap-3">
                <button type="submit" class="w-full border border-primary text-white bg-primary py-2 rounded-md hover:bg-gray-800 transition">
                    Registreer
                </button>
                <a href="?page=home" class="w-full border border-primary text-primary py-2 rounded-md hover:bg-gray-200 transition text-center">
                    Terug naar Home
                </a>
            </div>
        </form>
    </div>
</div>

</body>

</html>