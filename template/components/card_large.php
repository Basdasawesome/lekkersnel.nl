<div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-12 mt-6 sm:mt-10 px-4">
    <?php for ($j = $i; $j < $i + 4; $j++) { 
        if (isset($database[$j])) { ?>
        <a href="?page=uitwerking&id=<?=$database[$j]["recipe_id"]?>">
            <div class="w-full relative">
                <img class="w-full h-64 sm:h-96 object-cover rounded-lg" src="<?=$database[$j]['image']?>" alt="<?=$database[$j]['title']?>">
                <h2 class="absolute bottom-4 left-4 text-text bg-primary p-2 rounded-md opacity-90 text-lg"><?=$database[$j]['title']?></h2>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="primary" class="size-10 sm:size-11 absolute top-2 right-4 stroke-primary">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/>
                </svg>
            </div>
        </a>
        <?php } else { ?>
            <div class="w-full relative">
                <img class="w-full h-64 sm:h-96 object-cover rounded-lg" src="/img/error.png" alt="Bestaat niet">
                <h2 class="absolute bottom-4 left-4 text-text bg-primary p-2 rounded-md opacity-90 text-lg">Bestaat niet</h2>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="primary" class="size-10 sm:size-11 absolute top-2 right-4 stroke-primary">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z"/>
                </svg>
            </div>
        <?php } 
    } 
    $i = $i + 4?>
</div>
