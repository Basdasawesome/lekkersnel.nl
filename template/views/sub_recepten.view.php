<?php include_once '../template/components/header.php'; 
$i = 0;
?>
<?php include_once '../template/components/hero.php'; ?>

<div class="w-full mx-auto max-w-7xl flex flex-col items-center px-4 mt-16">
    <h2 class="text-lg font-semibold mb-4 text-center w-full md:text-left lg:text-left">ZOEK NAAR EEN LEKKER SNEL RECEPT</h2>
    <div class="flex flex-col sm:flex-row items-center gap-2 w-full max-w-2xl">
        <input type="text" placeholder="zoeken..."
            class="border border-gray-300 rounded-md px-3 py-2 w-full sm:flex-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
        <select
            class="border border-gray-300 rounded-md px-3 py-2 w-full sm:w-auto bg-white focus:outline-none focus:ring-2 focus:ring-blue-400">
            <option>Hoofdgerecht</option>
            <option>Voorgerecht</option>
            <option>Bijgerecht</option>
            <option>Dessert</option>
        </select>
        <select
            class="border border-gray-300 rounded-md px-3 py-2 w-full sm:w-auto bg-white focus:outline-none focus:ring-2 focus:ring-blue-400">
            <option>Vlees</option>
            <option>Vis</option>
            <option>Vegetarisch</option>
            <option>Vegan</option>
        </select>
        <button
            class="bg-primary text-white px-4 py-2 w-full sm:w-auto rounded-md hover:bg-green-600 transition">
            Zoeken
        </button>
    </div>
</div>


<?php include_once '../template/components/card_large.php'; ?>
<?php include_once '../template/components/footer.php'; ?>