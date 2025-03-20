<?php function renderHero($title, $url) 
{
?>

<div class="h-64 bg-cover bg-center px-1 md:px-8 text-center text-black font-bold text-sm lg:text-xl"
     style="background-image: url('<?= htmlspecialchars($url) ?>');">
    <div class="flex justify-center items-end h-full mb-8">
        <h1 class="px-4 py-3 mx-auto w-fit text-center drop-shadow-lg rounded-md bg-white md:px-6 md:py-4 lg:px-8 lg:w-fit mb-[-32px]">
            <?= htmlspecialchars($title) ?>
        </h1>
    </div>
</div>

<?php
}
?>