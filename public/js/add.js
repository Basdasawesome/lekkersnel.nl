const addIngredienten = document.querySelector("#addIngredienten");
const inputIngredienten = document.querySelector("#inputIngredienten");
const addInstructies = document.querySelector("#addInstructies");
const inputInstructies = document.querySelector("#inputInstructies");

addIngredienten.addEventListener("click", (event) => {
    event.preventDefault();

    addIngredientField(inputIngredienten);
});

addInstructies.addEventListener("click", (event) => {
    event.preventDefault();

    addField("textarea", "instructies[]", "Beschrijf volgende stap", inputInstructies);
});

function addField(inputType, inputName, placeholderText, addToArea) {
    let div = document.createElement("div");
    div.classList.add("w-full", "relative", "mt-2", "flex");

    let input = document.createElement(inputType);
    input.type = "text";
    input.name = inputName;
    input.placeholder = placeholderText;
    input.classList.add("w-11/12", "p-3", "border", "rounded-md", "bg-gray-100");

    let button = document.createElement("button");
    button.innerHTML = "🗑️";
    button.classList.add("w-1/12", "text-gray-400", "hover:hover-text-red-500", "ml-2");
    button.addEventListener("click", (event) => {
        event.preventDefault();
        div.remove();
    });

    div.appendChild(input);
    div.appendChild(button);
    addToArea.appendChild(div);
}

function addIngredientField(addToArea) {
    let div = document.createElement("div");
    div.classList.add("flex", "justify-center", "items-center", "flex-row", "gap-2");

    let addIngredient = createInput(["w-6/12", "relative", "mt-2"], "text", "ingredienten[]", "Ingrediënt");
    let addHoeveelheid = createInput(["w-3/12", "relative", "mt-2"], "number", "hoeveelheid[]", "Hoeveelheid");
    let addEenheid = createInput(["w-2/12", "relative", "mt-2"], "text", "ingredient_eenheid[]", "Eenheid");

    let buttonDiv = document.createElement("div");
    buttonDiv.classList.add("w-1/12", "flex", "justify-center", "items-center", "h-full");
    let button = document.createElement("button");
    button.innerHTML = "🗑️";
    button.classList.add("text-gray-400", "hover:hover-text-red-500");
    button.addEventListener("click", (event) => {
        event.preventDefault();
        div.remove();
    });

    div.appendChild(addIngredient);
    div.appendChild(addHoeveelheid);
    div.appendChild(addEenheid);
    buttonDiv.appendChild(button);
    div.appendChild(buttonDiv);
    addToArea.appendChild(div);
}

function createInput(classlistDiv, type, name, placeholder) {
    let div = document.createElement("div");
    classlistDiv.forEach(element => {
        div.classList.add(element);
    });
    
    let input = document.createElement("input");
    input.type = type;
    input.name = name;
    input.placeholder = placeholder;
    input.classList.add("w-full", "p-3", "border", "rounded-md", "bg-gray-100", "focus:ring", "focus:ring-green-200");

    div.appendChild(input);

    return(div);
}