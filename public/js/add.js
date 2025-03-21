const addIngredienten = document.querySelector("#addIngredienten");
const inputIngredienten = document.querySelector("#inputIngredienten");
const addInstructies = document.querySelector("#addInstructies");
const inputInstructies = document.querySelector("#inputInstructies");

addIngredienten.addEventListener("click", (event) => {
    event.preventDefault();

    addField("input", "ingredienten[]", "Hoeveelheid + Ingrediënten", inputIngredienten);
});

addInstructies.addEventListener("click", (event) => {
    event.preventDefault();

    addField("textarea", "instructies[]", "Beschrijf volgende stap", inputInstructies);
});

function addField(inputType, inputName, placeholderText, addToArea) {
    let div = document.createElement("div");
    div.classList.add("relative", "mt-2", "flex");

    let input = document.createElement(inputType);
    input.type = "text";
    input.name = inputName;
    input.placeholder = placeholderText;
    input.classList.add("w-full", "p-3", "border", "rounded-md", "bg-gray-100");

    let button = document.createElement("button");
    button.innerHTML = "🗑️";
    button.classList.add("text-gray-400", "hover:hover-text-red-500", "ml-2");
    button.addEventListener("click", (event) => {
        event.preventDefault();
        div.remove();
    });

    div.appendChild(input);
    div.appendChild(button);
    addToArea.appendChild(div);
}