<?php 
// Debug information
// var_dump(session_status());
// var_dump($_SESSION);
// var_dump("User ID from session:", $_SESSION['user_id']);

// $user = getUser();

include_once '../template/components/header.php';

?>


<section class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-12">PROFIEL</h1>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Left side - Form -->
         <form action="?page=profile" method="POST">
        <div class="space-y-8">
            <!-- Username -->
            <div>
                <label class="block text-gray-700 mb-2">Username</label>
                <div class="relative">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" 
                           class="w-full pl-12 pr-10 py-3 bg-white border border-gray-200 rounded-full focus:ring-2 focus:ring-primary focus:border-primary" required>
                    <button class="absolute right-4 top-1/2 -translate-y-1/2">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Email -->
            <div>
                <label class="block text-gray-700 mb-2">Email</label>
                <div class="relative">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </span>
                    <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" 
                           class="w-full pl-12 pr-10 py-3 bg-white border border-gray-200 rounded-full focus:ring-2 focus:ring-primary focus:border-primary" required>
                    <button class="absolute right-4 top-1/2 -translate-y-1/2">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Password -->
            <div>
                <label class="block text-gray-700 mb-2">Password</label>
                <div class="relative">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2">
                        <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </span>
                    <input type="password" name="password" placeholder="*************" 
                           class="w-full pl-12 pr-24 py-3 bg-white border border-gray-200 rounded-full focus:ring-2 focus:ring-primary focus:border-primary">
                    <button class="absolute right-4 top-1/2 -translate-y-1/2 px-4 py-1 text-gray-600 bg-gray-100 rounded-full hover:bg-gray-200">
                        Change
                    </button>
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <div class="mt-12">
                <button type="submit" class="w-full bg-primary text-white py-2 rounded-md hover:bg-primary hover:opacity-85 transition">
                    Update Profile
                </button>
            </div>
        </form>

        <!-- Right side - Profile Picture -->
        <div class="flex flex-col items-center">
            <div class="relative">
                <div class="w-48 h-48 rounded-full bg-yellow-400 overflow-hidden">
                    <img src="<?= htmlspecialchars($user['profile_picture'] ?? 'img/default-avatar.png') ?>" 
                         alt="Profile Picture" 
                         class="w-full h-full object-cover">
                </div>
                <button class="absolute top-2 right-2 p-2 bg-white rounded-full shadow-md hover:bg-gray-50">
                    <svg class="w-5 h-5 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </button>
            </div>
            <h2 class="text-2xl font-semibold mt-4"><?= htmlspecialchars($user['username']) ?></h2>
            <div class="w-16 h-1 bg-primary mt-2 rounded-full"></div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="mt-12">
        <div class="flex justify-center gap-4 border-b">
            <button class="px-6 py-3 text-gray-700 border-b-2 border-primary">Opgeslagen Recepten</button>
            <button class="px-6 py-3 text-gray-500 hover:text-gray-700">Eigen Recepten</button>
        </div>
        
        <!-- Recipe Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mt-8">
            <!-- Card 1 -->
            <div class="relative rounded-lg overflow-hidden">
                <img src="img/grilled_salmon.png" alt="Grilled Salmon" class="w-full h-64 object-cover">
                <div class="absolute bottom-4 left-4">
                    <span class="px-4 py-2 bg-primary text-white rounded-full">Grilled Salmon</span>
                </div>
                <button class="absolute top-4 right-4 p-2 text-primary">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </button>
            </div>

            <!-- Card 2 -->
            <div class="relative rounded-lg overflow-hidden">
                <img src="img/chicken_curry.png" alt="Chicken Curry" class="w-full h-64 object-cover">
                <div class="absolute bottom-4 left-4">
                    <span class="px-4 py-2 bg-primary text-white rounded-full">Chikcen Curry</span>
                </div>
                <button class="absolute top-4 right-4 p-2 text-primary">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>


<?php include_once '../template/components/footer.php'; ?>