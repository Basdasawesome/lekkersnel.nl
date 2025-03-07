<nav class="fixed top-0 border-solid border-gray-200 w-full border-b py-3 bg-white z-50 mb">
        <div class="container mx-auto px-4">
            <div class="w-full flex flex-col lg:flex-row justify-between items-center">
                <div class="flex justify-between items-center w-full lg:w-auto">
                    <a href="#home" class="flex items-center">
                        <img src="img/logo.png" alt="logo" class="w-12 h-12">
                    </a>
                    <button id="menu-toggle" type="button" class="lg:hidden p-2 text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                
                <div id="menu" class="hidden lg:flex flex-col lg:flex-row items-center mt-4 lg:mt-0 lg:ml-auto lg:pl-11 w-full lg:w-auto">
                    <ul class="flex flex-col lg:flex-row items-center gap-10 w-full lg:w-auto">
                        <li><a href="#home" class="text-gray-500 text-base font-medium hover:text-green-700 transition-all">Home</a></li>
                        <li><a href="#about" class="text-gray-500 text-base font-medium hover:text-green-700 transition-all">Over ons</a></li>
                        <li><a href="#recipes" class="text-gray-500 text-base font-medium hover:text-green-700 transition-all">Recepten</a></li>
                        <li><a href="#contact" class="text-gray-500 text-base font-medium hover:text-green-700 transition-all">Contact</a></li>
                    </ul>
                    <a href="#profile" class="flex items-center mt-4 lg:mt-0 lg:ml-10">
                        <img src="https://placehold.co/400" alt="User Profile" class="w-8 h-8 rounded-full">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            let menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>