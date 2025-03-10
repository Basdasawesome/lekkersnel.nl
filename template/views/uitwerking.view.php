<?php

include_once '../template/components/header.php';

?>

<?php include '../template/components/hero.php'; ?>

<section class="max-w-4xl mx-auto bg-white p-8 pt-28">
    <div class="flex flex-col md:flex-row lg:gap-56">
        <div class="md:w-2/3">
            <h1 class="text-3xl font-bold mb-4">Pitabroodjes met Kip en Avocado</h1>
            <p class="text-gray-700 mb-2"><strong>Bereidingstijd:</strong> 30 min</p>
            <p class="text-gray-700 mb-6"><strong>Recept voor:</strong> 2 personen</p>

            <h2 class="text-2xl font-semibold mb-4">Benodigdheden</h2>
            <ul class="list-none list-inside mb-6 text-lg text-gray-700 [&>li]:relative [&>li]:before:content-['•'] [&>li]:before:absolute [&>li]:before:-left-4 [&>li]:before:text-primary [&>li]:before:text-xl">
                <li>4 pitabroodjes</li>
                <li>300 gr kipfilet</li>
                <li>1 avocado</li>
                <li>1 rode ui</li>
                <li>2 tomaten</li>
                <li>Ijbergsla of sla melange</li>
                <li>100 ml yoghurt</li>
                <li>1 tl knoflookpoeder of 1 teen knoflook</li>
                <li>1 tl paprikapoeder</li>
                <li>1 el olijfolie</li>
                <li>Snufje zout en peper</li>
            </ul>
        </div>
        <div class=" w-3/5 md:w-2/3 lg:w-5/6">
            <img src="https://www.lekkerensimpel.com/wp-content/uploads/2025/01/588A8654-scaled.jpg" alt="Pitabroodjes met kip en avocado" class="w-full h-auto rounded-lg">
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-2xl font-semibold mb-4">Bereidingswijze</h2>
        <ol class="list-decimal list-inside text-lg text-gray-700 space-y-2">
            <li>Snijd de kipfilet in reepjes en meng met olijfolie, knoflookpoeder, paprikapoeder, zout en peper. Laat 10 minuten marineren.</li>
            <li>Snijd de rode ui in halve ringen.</li>
            <li>Snijd de tomaten in blokjes en de avocado in stukjes.</li>
            <li>Bak de kipreepjes in een pan op middelhoog vuur in 5-7 minuten goudbruin en gaar.</li>
            <li>Verwarm de pitabroodjes volgens de instructies op de verpakking.</li>
            <li>Maak een saus van yoghurt met een snufje zout en peper.</li>
            <li>Vul de pitabroodjes met sla, avocado, tomaat, rode ui en kip. Serveer met de yoghurtsaus.</li>
        </ol>
    </div>
</section>

<?php include_once '../template/components/footer.php'; ?>