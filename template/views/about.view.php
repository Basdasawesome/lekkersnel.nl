<?php

include_once '../template/components/header.php';

?>

<main>
    <!-- hero -->
    <section class="py-12 relative sm:px-12 lg:px-32 mt-12">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center gap-8 grid grid-cols-1 lg:grid-cols-2">
                <div class="w-full flex-col justify-start items-center lg:items-start gap-10 inline-flex">
                    <div class="w-full flex-col justify-start items-center lg:items-start gap-0 flex">
                        <h2 class="text-gray-900 text-4xl font-semibold leading-normal text-center lg:text-start mb-0">Waarom</h2>
                        <span class="text-primary text-5xl font-bold text-center lg:text-start">Lekkersnel.nl</span>
                        <p class="text-gray-500 text-base font-normal leading-relaxed text-center lg:text-start mt-6">
                            Welkom bij LekkerSnel.nl, dé plek voor snelle en heerlijke recepten! Van budgetvriendelijke maaltijden tot Michelin-waardige gerechten, er is voor iedereen iets lekkers.
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4 mt-6 w-full justify-center md:justify-center lg:justify-start items-center">
    <button class="w-full max-w-[630px] sm:max-w-fit sm:w-auto px-10 py-3 bg-primary opacity-90 hover:bg-green-600 transition-all duration-700 ease-in-out rounded-lg shadow-lg text-white font-medium">
        Recepten
    </button>
    <button class="w-full max-w-[630px] sm:max-w-fit sm:w-auto px-10 py-3 bg-gray-600 hover:bg-gray-800 transition-all duration-700 ease-in-out rounded-lg shadow-lg text-white font-medium">
        Ons team
    </button>
</div>


                </div>
                <img class="w-full h-auto rounded-3xl object-cover lg:mx-0 mx-auto" src="../img/about_hero.png" alt="About Us Image" />
            </div>
        </div>
    </section>

    <section class="w-full max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-center mb-10 w-full">
        <div class="flex-grow border-t-2 border-primary w-full"></div>
        <h2 class="text-center text-3xl font-bold text-gray-900 uppercase mx-4 whitespace-nowrap">Ons team</h2>
        <div class="flex-grow border-t-2 border-primary w-full"></div>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 w-full">
            <!-- name 1 -->
            <div class="group bg-white rounded-2xl shadow-sm transition-all duration-300 ease-in-out overflow-hidden">
                <div class="relative">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="Teammate" class="w-full h-52 md:h-48 object-cover object-center" />
                    <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-black/80 via-black/40 to-transparent p-4 flex flex-col justify-end">
                        <h3 class="text-xl font-semibold text-white">Davey Munters</h3>
                        <p class="text-gray-200 text-sm md:text-base">Back-end developer</p>
                    </div>
                </div>
                <div class="p-4 md:p-6">
                    <p class="text-sm md:text-base text-gray-600 mb-4">
                    Ik werk aan de serverkant van LekkerSnel.nl. Van het opslaan van recepten tot het verwerken van zoekopdrachten.
                    </p>
                    <div class="space-y-3">
                        <h4 class="text-xs md:text-sm font-semibold text-gray-900 uppercase tracking-wider">Expertise</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2.5 py-1 text-xs md:text-sm bg-primary bg-opacity-90 text-white rounded-full font-medium">MySQL</span>
                            <span class="px-2.5 py-1 text-xs md:text-sm bg-primary bg-opacity-90 text-white rounded-full font-medium">Javascript</span>
                            <span class="px-2.5 py-1 text-xs md:text-sm bg-primary bg-opacity-90 text-white rounded-full font-medium">PHP</span>
                        </div>
                    </div>
                    <div class="flex justify-center items-center space-x-4 mt-6 pt-4 border-t border-gray-100">
                        <a href="https://github.com" class="text-gray-500 hover:text-gray-900 transition-colors duration-200" aria-label="GitHub Profile">GitHub</a>
                        <a href="https://linkedin.com" class="text-gray-500 hover:text-gray-900 transition-colors duration-200" aria-label="LinkedIn Profile">LinkedIn</a>
                    </div>
                </div>
            </div>
            <!-- name 2 -->
            <div class="group bg-white rounded-2xl shadow-sm transition-all duration-300 ease-in-out overflow-hidden">
                <div class="relative">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="Teammate" class="w-full h-52 md:h-48 object-cover object-center" />
                    <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-black/80 via-black/40 to-transparent p-4 flex flex-col justify-end">
                        <h3 class="text-xl font-semibold text-white">Cristian de Vries</h3>
                        <p class="text-gray-200 text-sm md:text-base">Front-end developer</p>
                    </div>
                </div>
                <div class="p-4 md:p-6">
                    <p class="text-sm md:text-base text-gray-600 mb-4">
                    Ik zorg ervoor dat LekkerSnel.nl er strak en modern uitziet. Van het ontwerp tot interactieve elementen.
                    </p>
                    <div class="space-y-3">
                        <h4 class="text-xs md:text-sm font-semibold text-gray-900 uppercase tracking-wider">Expertise</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2.5 py-1 text-xs md:text-sm bg-primary bg-opacity-90 text-white rounded-full font-medium">Tailwind</span>
                            <span class="px-2.5 py-1 text-xs md:text-sm bg-primary bg-opacity-90 text-white rounded-full font-medium">Javascript</span>
                            <span class="px-2.5 py-1 text-xs md:text-sm bg-primary bg-opacity-90 text-white rounded-full font-medium">Figma</span>
                        </div>
                    </div>
                    <div class="flex justify-center items-center space-x-4 mt-6 pt-4 border-t border-gray-100">
                        <a href="https://github.com" class="text-gray-500 hover:text-gray-900 transition-colors duration-200" aria-label="GitHub Profile">GitHub</a>
                        <a href="https://linkedin.com" class="text-gray-500 hover:text-gray-900 transition-colors duration-200" aria-label="LinkedIn Profile">LinkedIn</a>
                    </div>
                </div>
            </div>
            <!-- name 3 -->
            <div class="group bg-white rounded-2xl shadow-sm transition-all duration-300 ease-in-out overflow-hidden">
                <div class="relative">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="Teammate" class="w-full h-52 md:h-48 object-cover object-center" />
                    <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-black/80 via-black/40 to-transparent p-4 flex flex-col justify-end">
                        <h3 class="text-xl font-semibold text-white">Ezra Vos</h3>
                        <p class="text-gray-200 text-sm md:text-base">Back-end developer</p>
                    </div>
                </div>
                <div class="p-4 md:p-6">
                    <p class="text-sm md:text-base text-gray-600 mb-4">
                    Achter de schermen zorg ik ervoor dat alle recepten, gebruikersdata en zoekfuncties soepel werken.
                    </p>
                    <div class="space-y-3">
                        <h4 class="text-xs md:text-sm font-semibold text-gray-900 uppercase tracking-wider">Expertise</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2.5 py-1 text-xs md:text-sm bg-primary bg-opacity-90 text-white rounded-full font-medium">MySQL</span>
                            <span class="px-2.5 py-1 text-xs md:text-sm bg-primary bg-opacity-90 text-white rounded-full font-medium">Javascript</span>
                            <span class="px-2.5 py-1 text-xs md:text-sm bg-primary bg-opacity-90 text-white rounded-full font-medium">PHP</span>
                        </div>
                    </div>
                    <div class="flex justify-center items-center space-x-4 mt-6 pt-4 border-t border-gray-100">
                        <a href="https://github.com" class="text-gray-500 hover:text-gray-900 transition-colors duration-200" aria-label="GitHub Profile">GitHub</a>
                        <a href="https://linkedin.com" class="text-gray-500 hover:text-gray-900 transition-colors duration-200" aria-label="LinkedIn Profile">LinkedIn</a>
                    </div>
                </div>
            </div>
            <!-- name 4 -->
            <div class="group bg-white rounded-2xl shadow-sm transition-all duration-300 ease-in-out overflow-hidden">
                <div class="relative">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="Teammate" class="w-full h-52 md:h-48 object-cover object-center" />
                    <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-black/80 via-black/40 to-transparent p-4 flex flex-col justify-end">
                        <h3 class="text-xl font-semibold text-white">Jada Hooper</h3>
                        <p class="text-gray-200 text-sm md:text-base">Front-end developer</p>
                    </div>
                </div>
                <div class="p-4 md:p-6">
                    <p class="text-sm md:text-base text-gray-600 mb-4">
                    Ik richt me op het creëren van een naadloze en interactieve gebruikerservaring voor alle bezoekers.
                    </p>
                    <div class="space-y-3">
                        <h4 class="text-xs md:text-sm font-semibold text-gray-900 uppercase tracking-wider">Expertise</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2.5 py-1 text-xs md:text-sm bg-primary bg-opacity-90 text-white rounded-full font-medium">MySQL</span>
                            <span class="px-2.5 py-1 text-xs md:text-sm bg-primary bg-opacity-90 text-white rounded-full font-medium">Javascript</span>
                            <span class="px-2.5 py-1 text-xs md:text-sm bg-primary bg-opacity-90 text-white rounded-full font-medium">PHP</span>
                        </div>
                    </div>
                    <div class="flex justify-center items-center space-x-4 mt-6 pt-4 border-t border-gray-100">
                        <a href="https://github.com" class="text-gray-500 hover:text-gray-900 transition-colors duration-200" aria-label="GitHub Profile">GitHub</a>
                        <a href="https://linkedin.com" class="text-gray-500 hover:text-gray-900 transition-colors duration-200" aria-label="LinkedIn Profile">LinkedIn</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include_once '../template/components/footer.php'; ?>