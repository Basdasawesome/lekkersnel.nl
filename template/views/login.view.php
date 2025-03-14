<?php
include_once '../template/components/header.php';

if (isset($_SESSION['error'])) {
    echo '<div class="error">' . $_SESSION['error'] . '</div>';
    unset($_SESSION['error']);
}
?>

<div class="flex items-center justify-center min-h-[calc(100vh-72px)] bg-gray-100">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm text-center">
        <div class="flex justify-center mb-4">
            <img src="img/logo.png" alt="Logo" class="h-12">
        </div>
        <form method="POST" action="?page=login">
        <h2 class="text-xl font-semibold mb-6">Log in</h2>
        <div class="text-left mb-4">
            <label class="block text-gray-500 font-small mb-1">Email</label>
            <input type="email" placeholder="JohnDoe@gmail.com" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>
        <div class="text-left mb-4">
            <label class="block text-gray-500 font-medium mb-1">Wachtwoord</label>
            <input type="password" placeholder="********" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>
        <p class="text-sm text-gray-800 mb-4">
            <a href="?page=register" class="hover:underline">Geen account? Klik hier</a>
        </p>
        <div class="mt-4 flex flex-col gap-3">
            <button type="submit" class="w-full border-primary text-white bg-primary py-2 rounded-md hover:bg-primary hover:opacity-80 transition">
                Log in
            </button>
            <a href="?page=home" class="w-full border  border-primary text-primary py-2 rounded-md hover:bg-gray-200 transition text-center">
                Terug naar Home
            </a>
        </div>
    </div>
</div>
</form>

</body>

</html>