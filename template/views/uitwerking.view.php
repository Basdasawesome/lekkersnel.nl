<?php

include_once '../template/components/header.php';

extract($data);

if (isset($recept) && is_array($recept)) {
    $title = $recept["title"] ?? "Geen titel gevonden";
    $preptime = $preparation_time["time_value"] . " " . $preparation_time["time_unit"] ?? "Niet beschikbaar";
    $description = $recept["description"] ?? "Niet beschikbaar";
    $quantity = $recept["quantity"] ?? "Niet beschikbaar";
    $image = $recept["image"] ?? "../img/error.png"; 
} else {
    $title = "Recept niet gevonden";
    $preptime = "Niet beschikbaar";
    $description = "Niet beschikbaar";
    $quantity = "Niet beschikbaar";
    $image = "../img/error.png"; 
}

?>
</div>

<?php include '../template/components/hero.php'; ?>

<section class="max-w-4xl mx-auto bg-white p-8 pt-28 mb-24">
    <div class="flex flex-col md:flex-row lg:gap-56">
        <div class="md:w-2/3">
            <h1 class="text-3xl font-bold mb-4"><?=$title?></h1>
            <p class="text-gray-700 mb-2"><strong>Bereidingstijd:</strong> <?= $preptime ?></p>
            <p class="text-gray-700 mb-6"><strong>Recept voor:</strong> <?= $description ?></p>

            <h2 class="text-2xl font-semibold mb-4">Benodigdheden</h2>
            <ul class="list-none list-inside mb-6 text-lg text-gray-700 [&>li]:relative [&>li]:before:content-['•'] [&>li]:before:absolute [&>li]:before:-left-4 [&>li]:before:text-primary [&>li]:before:text-xl">
                <?php if (!empty($ingredients)) { ?>
                    <?php foreach ($ingredients as $ingredient) { ?>
                        <li><?= $ingredient["quantity"] . " " . $ingredient["unit"] . ", " . $ingredient["name"] ?></li>
                    <?php } ?>
                <?php } else { ?>
                    <li>Geen ingrediënten beschikbaar</li>
                <?php } ?>
            </ul>
        </div>
        <div class="w-3/5 md:w-2/3 lg:w-5/6">
            <img src="<?=$image?>" alt="<?=$title?>" class="w-full h-auto rounded-lg">
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-2xl font-semibold mb-4">Bereidingswijze</h2>
        <ol class="list-decimal list-inside text-lg text-gray-700 space-y-2">
            <?php if (!empty($instructions)) { ?>
                <?php foreach ($instructions as $instruction) { ?>
                    <li><?= $instruction["instruction_text"] ?></li>
                <?php } ?>
            <?php } else { ?>
                <li>Geen instructies beschikbaar.</li>
            <?php } ?>
        </ol>
    </div>
</section>

<?php include_once '../template/components/footer.php'; ?>