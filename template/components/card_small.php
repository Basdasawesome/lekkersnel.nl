<div class="max-w-7xl mx-auto px-4 ">
    <div class="w-full my-10">
        <h1 class="w-full text-2xl flex items-center gap-2">
            Thema's
            <span class="flex-1 ml-6 border-2 border-primary"></span>
        </h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-12 mt-10">
        <?php for ($j = $i; $j < $i + 8; $j++) { 
            if (isset($database[$j])) { ?>
            <a href="?page=uitwerking&id=<?=$database[$j]["recipe_id"]?>">    
                <div class="w-full relative">
                    <img class="w-full object-cover h-48 min-h-[192px] rounded-lg" src="<?=$database[$j]["image"]?>" alt="<?=$database[$j]["title"]?>">
                    <h2 class="absolute bottom-2 left-4 text-white bg-primary px-3 py-1 rounded-md bg-opacity-85"><?=$database[$j]["title"]?></h2>
                </div>
            </a>
        <?php } else { ?>
            <a href="?page=uitwerking&id=error">    
                <div class="w-full relative">
                    <img class="w-full object-cover h-48 min-h-[192px] rounded-lg" src="/img/error.png" alt="Bestaat niet">
                    <h2 class="absolute bottom-2 left-4 text-white bg-primary px-3 py-1 rounded-md opacity-90">Bestaat niet</h2>
                </div>
            </a>
        <?php }
    } 
    $i = $i + 8; ?>
    </div>

    <div class="mt-8">
        <button class="bg-primary opacity-80 text-white px-5 py-1 rounded-md text-base font-medium">
            Bekijk Meer
        </button>
    </div>
</div>
