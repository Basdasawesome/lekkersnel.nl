<?php

include_once '../template/components/header.php';

?>

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm text-center">
        <div class="flex justify-center mb-4">
            <img src="img/logo.png" alt="Logo" class="h-12">
        </div>
        <h2 class="text-xl font-semibold mb-6">Log in</h2>
        <div class="text-left mb-4">
            <label class="block text-gray-500 font-small mb-1">Gebruikersnaam</label>
            <input type="text" placeholder="John Doe" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>
        <div class="text-left mb-4">
            <label class="block text-gray-500 font-medium mb-1">Wachtwoord</label>
            <input type="password" placeholder="********" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
        </div>
        <p class="text-sm text-gray-800 mb-4">
            <a href="?page=register" class="hover:underline">Geen account? Klik hier</a>
        </p>
        <div class="mt-4 flex flex-col gap-3">
            <button class="w-full border-primary text-white bg-primary py-2 rounded-md hover:bg-gray-800 transition">
            Log in
            </button>
            <a href="?page=home" class="w-full border  border-primary text-primary py-2 rounded-md hover:bg-gray-200 transition text-center">
            Terug naar Home
            </a>
        </div>
    </div>
</div>