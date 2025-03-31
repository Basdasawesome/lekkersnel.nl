<div class="max-w-7xl mx-auto px-4">
    <div class="w-full my-10">
        <h1 class="w-full text-2xl flex items-center gap-2">
            Onze favorieten
            <span class="flex-1 ml-6 border-2 border-primary"></span>
        </h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 sm:gap-12 md:gap-16 mt-10">
        <?php foreach ($favorieten as $favoriet) { ?>
            <a href="?page=uitwerking&id=<?=$favoriet['recipe']['recipe_id']?>">
                <div class="w-full relative hover:translate-y-[-5px] transition-all">
                    <img class="w-full object-cover h-64 min-h-[256px] rounded-lg" 
                         src="<?=$favoriet['recipe']['image']?>" 
                         alt="<?=$favoriet['recipe']['title']?>">
                    <h2 class="absolute bottom-4 left-4 text-white bg-primary p-2 rounded-md opacity-90 text-sm sm:text-base">
                        <?=$favoriet['recipe']['title']?>
                    </h2>
                </div>
            </a>
        <?php } ?>
    </div>
</div>