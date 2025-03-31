<div class="max-w-7xl mx-auto px-4 ">
    <div class="w-full my-10">
        <h1 class="w-full text-2xl flex items-center gap-2">
            Thema's
            <span class="flex-1 ml-6 border-2 border-primary"></span>
        </h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-12 mt-10">
        <?php 
        $recipes = array_values($database);
        for ($j = $i; $j < $i + 8; $j++) { 
            if (isset($recipes[$j])) { ?>
            <a href="?page=uitwerking&id=<?=$recipes[$j]["recipe_id"]?>">
                <div class="w-full relative hover:translate-y-[-5px] transition-all">
                    <img class="w-full object-cover h-48 min-h-[192px] rounded-lg" 
                         src="<?=$recipes[$j]["image"]?>" 
                         alt="<?=$recipes[$j]["title"]?>">
                    <h2 class="absolute bottom-2 left-4 text-white bg-primary px-3 py-1 rounded-md bg-opacity-85">
                        <?=$recipes[$j]["title"]?>
                    </h2>
                </div>
            </a>
        <?php } else { ?>
            <a href="?page=uitwerking&id=error">
                <div class="w-full relative">
                    <img class="w-full object-cover h-48 min-h-[192px] rounded-lg" 
                         src="/img/error.png" alt="Bestaat niet">
                    <h2 class="absolute bottom-2 left-4 text-white bg-primary px-3 py-1 rounded-md opacity-90">
                        Bestaat niet
                    </h2>
                </div>
            </a>
        <?php }
        } 
        $i = $i + 8; ?>
    </div>

    <div class="mt-12 flex justify-center">
        <button class="bg-primary border border-white text-white opacity-80 px-10 py-1.5 rounded-md text-base font-[550] hover:bg-white hover:text-primary hover:border-primary transition">
            Bekijk Meer
        </button>
    </div>
</div>