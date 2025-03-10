<?php

include_once '../template/components/header.php';

?>


<div>
    <div>
        <?php include_once '../template/components/navbar.php'; ?>
        <div class="pt-[70px]">

            <section id="contact">
                <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
                    <div class="mb-4">
                    </div>
                    <div class="flex items-stretch justify-center">
                        <div class="grid md:grid-cols-2">
                            <div class="h-full pr-6">
                                <div class="mb-6 max-w-3xl text-center lg:text-start md:mx-auto md:mb-12">
                                    <h2 class="font-heading mb-4 font-bold tracking-tight text-gray-900 text-2xl sm:text-5xl">
                                        Heb je vragen of <bold class="text-primary">suggesties</bold>?
                                    </h2>
                                </div>
                                <p class="mt-3 mb-12 text-lg text-gray-600">
                                    We horen graag van je! Heb je een vraag over een recept of kom je ergens niet uit? Misschien heb je een suggestie om de website te verbeteren.
                                    Laat het ons weten via het contactformulier. We doen ons best om zo snel mogelijk te reageren.
                                    Jouw feedback helpt ons om de site nog beter te maken!
                                </p>
                                <ul class="mb-6 md:mb-0">
                                    <li class="flex">
                                        <div class="flex h-10 w-10 items-center justify-center rounded  text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="h-6 w-6">
                                                <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                                                <path d="M15 7a2 2 0 0 1 2 2"></path>
                                                <path d="M15 3a6 6 0 0 1 6 6"></path>
                                            </svg>
                                        </div>
                                        <div class="ml-4 mb-4">
                                            <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900">Contact</h3>
                                            <p class="text-gray-600">+31 1476938326</p>
                                            
                                        </div>
                                    </li>
                                    <li class="flex">
                                        <div class="flex h-10 w-10 items-center justify-center rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#7DCE5C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                                        </div>
                                        <div class="ml-4 mb-4">
                                            <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900">Email</h3>
                                            <p class="text-gray-600">Johnprok@gmail.com</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card h-fit max-w-6xl p-5 md:p-12" id="form">
                                <h2 class="mb-4 text-2xl font-bold">Vul hier uw gegevens in</h2>
                                <form id="contactForm">
                                    <div class="mb-6">
                                        <div class="mx-0 mb-1 sm:mb-4">
                                            <div>
                                            <div class="mx-0 mb-1 sm:mb-4">
                                                <p>Naam</p>
                                                <label for="name" class="pb-1 text-xs uppercase tracking-wider"></label>
                                                <input type="text" id="name" autocomplete="given-name" placeholder="John Doe" class="mb-2 w-full rounded-md border  border-gray-400 py-2 pl-2 pr-4 shadow-md sm:mb-0" name="name">
                                            </div>
                                                
                                        </div>
                                            <div class="mx-0 mb-1 sm:mb-4">
                                                <p>Email</p>
                                                <label for="email" class="pb-1 text-xs uppercase tracking-wider"></label>
                                                <input type="email" id="email" autocomplete="email" placeholder="johndoe@gmail.com" class="mb-2 w-full rounded-md border  border-gray-400 py-2 pl-2 pr-4 shadow-md sm:mb-0" name="email">
                                            </div>
                                        </div>
                                        <div class="mx-0 mb-1 sm:mb-4">
                                            <p>Bericht</p>
                                            <label for="textarea" class="pb-1 text-xs uppercase tracking-wider"></label>
                                            <textarea id="textarea" name="textarea" cols="30" rows="5" placeholder="schrijf uw bericht..." class="mb-2 w-full rounded-md border  border-gray-400 py-2 pl-2 pr-4 shadow-md sm:mb-0"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="w-full bg-primary text-white px-6 py-3 font-xl rounded-md sm:mb-0">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="mt-16">
                <?php include_once '../template/components/footer.php'; ?>
            </div>
        </div>
</div>
