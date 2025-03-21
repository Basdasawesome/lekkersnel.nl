const addIngredienten = document.querySelector("#addIngredienten");
const inputIngredienten = document.querySelector("#inputIngredienten");
const addInstructies = document.querySelector("#addInstructies");
const inputInstructies = document.querySelector("#inputInstructies");

console.log(addIngredienten, inputIngredienten, addInstructies, inputInstructies);

addIngredienten.addEventListener("click", (event) => {
    event.preventDefault();

    let div = document.createElement("div");
    div.classList.add("relative", "mt-2", "flex");
    
    let input = document.createElement("input");
    input.type = "text";
    input.name = "ingredienten[]";
    input.placeholder = "Hoeveelheid + Ingrediënten";
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
    inputIngredienten.appendChild(div);
});

addInstructies.addEventListener("click", (event) => {
    event.preventDefault();

    let div = document.createElement("div");
    div.classList.add("relative", "mt-2", "flex");

    let textarea = document.createElement("textarea");
    textarea.name = "instructies[]";
    textarea.placeholder = "Beschrijf volgende stap";
    textarea.classList.add("w-full", "p-3", "border", "rounded-md", "bg-gray-100");

    let button = document.createElement("button");
    button.innerHTML = "🗑️";
    button.classList.add("text-gray-400", "hover:hover-text-red-500", "ml-2");
    button.addEventListener("click", (event) => {
        event.preventDefault();
        div.remove();
    });

    div.appendChild(textarea);
    div.appendChild(button);
    inputInstructies.appendChild(div);
});
