const minusButton = document.querySelector(".minus");
const plusButton = document.querySelector(".plus");
const quantity = document.querySelector(".quantity");
const price = document.querySelector(".price");

minusButton.addEventListener("click", () => {
    let currentQuantity = parseInt(quantity.innerHTML, 20);
    if (currentQuantity > 0) {
        currentQuantity -= 1;
        quantity.innerHTML = currentQuantity;
        price.innerHTML = "$" + currentQuantity * 20;
    }
});

plusButton.addEventListener("click", () => {
    let currentQuantity = parseInt(quantity.innerHTML, 20);
    currentQuantity += 1;
    quantity.innerHTML = currentQuantity;
    price.innerHTML = "$" + currentQuantity * 20;
});
