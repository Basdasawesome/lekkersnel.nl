<?php

include_once '../template/components/header.view.php';

?>

</body>
    <?php include_once '../template/components/navbar.php'; ?>
        <main>
            <!-- hero -->
            <section class="py-24 relative mx-32 mt-12">
                <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
                    <div class="w-full justify-start items-center gap-8 grid lg:grid-cols-2 grid-cols-1">
                        <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex">
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-0 flex">
                                <h2 class="text-gray-900 text-4xl font-semibold font-manrope leading-normal lg:text-start text-center mb-0">Waarom</h2>
                                <span class="text-primary text-5xl font-bold">Lekkersnel.nl</span>
                                <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center mt-6">Welkom bij LekkerSnel.nl, dé plek voor snelle en heerlijke recepten! Van budgetvriendelijke maaltijden tot Michelin-waardige gerechten, er is voor iedereen iets lekkers.</p>
                            </div>
                            <div class="flex row gap-8">
                                <button class="sm:w-fit w-1/2 px-10 py-2 bg-primary opacity-90 hover:bg-green-600 transition-all duration-700 ease-in-out rounded-lg shadow-lg justify-center items-center flex">
                                    <span class="px-1.5 text-white text-sm font-medium leading-6">Recepten</span>
                                </button>
                                <button class="sm:w-fit w-1/2 px-10 py-2 bg-gray-600 hover:bg-gray-800 transition-all duration-700 ease-in-out rounded-lg shadow-lg justify-center items-center flex">
                                    <span class="px-1.5 text-white text-sm font-medium leading-6">Ons team</span>
                                </button>
                            </div>
                        </div>
                        <img class="lg:mx-0 mx-auto h-full rounded-3xl object-cover" src="img/about_hero.png" alt="about Us image" />
                    </div>
                </div>
            </section>

            <!-- team sectie -->
            <section class="w-full max-w-6xl mx-auto py-12">
                <div class="flex items-center justify-center mb-10">
                    <div class="flex-grow border-t-2 border-green-500"></div>
                        <h2 class="text-center text-3xl font-bold text-gray-900 uppercase mx-4">ONS TEAM</h2>
                    <div class="flex-grow border-t-2 border-green-500"></div>
                </div>
                
                <!-- Teamleden -->
                <?php
                $team = [
                    ['name' => 'CRISTIAN', 'role' => 'FRONT-END DEVELOPER', 'desc' => 'Ik zorg ervoor dat LekkerSnel.nl er strak en modern uitziet...', 'fav' => ['FRIKANDEL', 'BBQ BURGER', 'GEFITUURDE SUSHI']],
                    ['name' => 'JADA', 'role' => 'FRONT-END DEVELOPER', 'desc' => 'Mijn focus ligt op het bouwen van een soepele en responsive website...', 'fav' => ['NACHO', 'SAJOER BOOTJES', 'SUSHI']],
                    ['name' => 'EZRA', 'role' => 'BACK-END DEVELOPER', 'desc' => 'Achter de schermen zorg ik ervoor dat alle recepten soepel werken...', 'fav' => ['RISOTTO', 'PANNENKOEKEN', 'NACHO OVENSCHOTEL']],
                    ['name' => 'DAVEY', 'role' => 'BACK-END DEVELOPER', 'desc' => 'Ik werk aan de serverkant van LekkerSnel.nl...', 'fav' => ['PASTA CARBONARA', 'FRIKANDEL XXL', 'BURRITO']]
                ];
                ?>
                
                <?php foreach ($team as $member): ?>
                <div class="grid lg:grid-cols-2 gap-10 items-start mb-8">
                    <!-- Team Member -->
                    <div class="flex gap-6 items-start">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Portrait_Placeholder.png" alt="Profile" class="w-20 h-20 rounded-full">
                        <div>
                            <h3 class="text-lg font-bold text-gray-900"><?php echo $member['name']; ?></h3>
                            <p class="text-green-600 font-semibold"><?php echo $member['role']; ?></p>
                            <p class="text-gray-600 mt-2"><?php echo $member['desc']; ?></p>
                        </div>
                    </div>
                    
                    <!-- Favorite Recipes (Right Side) -->
                    <div class="flex flex-col text-right">
                        <h4 class="text-gray-900 font-bold mb-3">FAVORIETE RECEPTEN</h4>
                        <ul class="space-y-2">
                            <?php foreach ($member['fav'] as $index => $recipe): ?>
                                <li class="flex items-center gap-2 justify-end"><span class="font-bold"><?php echo $index + 1; ?></span> <?php echo $recipe; ?> 🔍</li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </section>
        </main>
    <?php include_once '../template/components/footer.php'; ?>
</body>
