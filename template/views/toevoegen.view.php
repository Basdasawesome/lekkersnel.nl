<?php include_once '../template/components/header.php'; ?>
<?php include_once '../template/components/hero.php'; 
    renderHero("Voeg een lekker recept toe!", "../img/hero.png");
?>

<script src="js/add.js" defer></script>
<div class="text-red-600">
    <p class="text-red-500 text-xl text-center mt-10 font-bold"><?= isset($_SESSION["message"]) ? $_SESSION["message"] : "" ?></p>
</div>
<form action="?page=toevoegen" method="post" class="max-w-4xl mx-auto p-6 mt-20 mb-12 bg-white" enctype="multipart/form-data">
    <div class="flex flex-col md:flex-row gap-6">
        <div class="w-full md:w-1/3 h-52 flex flex-col justify-center items-center border border-gray-300 rounded-lg cursor-pointer">
            <input type="file" name="image" id="image">
            <svg class="w-10 h-10 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <p class="text-gray-500 text-sm mt-2">Klik om een afbeelding te uploaden</p>
        </div>

        <div class="flex-1">
            <label class="block text-gray-700 text-sm font-medium mb-1" for="naam">Naam van het recept</label>
            <input type="text" name="naam" id="naam" placeholder="Bijv, Pasta Carbonara" class="w-full p-3 border rounded-md bg-gray-100 focus:ring focus:ring-green-200">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1" for="bereidingstijd">Bereidingstijd</label>
                    <input type="number" name="bereidingstijd" id="bereidingstijd" placeholder="Bijv, 30 min" class="w-full p-3 border rounded-md bg-gray-100 focus:ring focus:ring-green-200">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1" for="tijd_eenheid">Eenheid</label>
                    <select name="tijd_eenheid" id="tijd_eenheid" class="w-full p-[14px] border rounded-md">
                        <option value="seconden">Seconden</option>
                        <option value="minuten">Minuten</option>
                        <option value="uur">Uur</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-medium mb-1" for="aantal">Aantal personen</label>
                    <input type="number" name="aantal" id="aantal" placeholder="Bijv, 4 personen" class="w-full p-3 border rounded-md bg-gray-100 focus:ring focus:ring-green-200">
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-primary my-6"></div>

    <div>
        <div class="flex justify-between items-center">
            <label class="text-gray-700 text-sm font-medium" for="beschrijving">Beschrijving</label>
        </div>
        <div class="relative mt-2 flex">
            <input type="text" name="beschrijving" id="beschrijving" placeholder="Bijv, Fris recept voor een zwoele zomer avond..." class="w-full p-3 border rounded-md bg-gray-100 focus:ring focus:ring-green-200">
        </div>
    </div>

    <div id="inputIngredienten" class="mt-6">
        <div class="flex justify-between items-center">
            <label class="text-gray-700 text-sm font-medium" for="ingredienten">Benodigdheden</label>
            <button id="addIngredienten" class="text-primary text-sm font-medium hover:underline">+ Voeg ingrediënt toe</button>
        </div>
        <div class="flex justify-center items-center flex-row gap-2">
            <div class="w-7/12 relative mt-2">
                <input type="text" name="ingredienten[]" id="ingredient" placeholder="Ingrediënten" class="w-full p-3 border rounded-md bg-gray-100 focus:ring focus:ring-green-200">
            </div>
            <div class="w-3/12 relative mt-2">
                <input type="number" name="hoeveelheid[]" id="hoeveelheid" placeholder="Hoeveelheid" class="w-full p-3 border rounded-md bg-gray-100 focus:ring focus:ring-green-200">
            </div>
            <div class="w-2/12 relative mt-2">
                <input type="text" name="ingredient_eenheid[]" id="ingredienten" placeholder="Eenheid" class="w-full p-3 border rounded-md bg-gray-100 focus:ring focus:ring-green-200">
            </div>
        </div>
    </div>

    <div id="inputInstructies" class="mt-6">
        <div class="flex justify-between items-center">
            <label class="text-gray-700 text-sm font-medium" for="instructies">Bereidingswijze</label>
            <button id="addInstructies" class="text-primary text-sm font-medium hover:underline">+ Voeg stap toe</button>
        </div>
        <div class="relative mt-2 flex">
            <textarea placeholder="Beschrijf eerste stap" name="instructies[]" id="instructies" class="w-full p-3 border rounded-md bg-gray-100 focus:ring focus:ring-green-200"></textarea>
            <!-- <button class="text-gray-400 hover:text-red-500 ml-2">
                🗑️
            </button> -->
        </div>
    </div>

    <div class="mt-6 flex justify-end">
        <input type="submit" class="bg-primary hover:bg-gray-800 text-white px-6 py-3 rounded-md opacity-90 transition duration-200"></button>
    </div>
</form>


<?php include_once '../template/components/footer.php'; ?>