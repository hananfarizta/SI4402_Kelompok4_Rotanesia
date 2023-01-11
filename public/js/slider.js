const prevButton = document.getElementById("prev");
const nextButton = document.getElementById("next");
const slider = document.querySelector(".slider");
const items = document.querySelectorAll(".slider-item");
let currentItemIndex = 0;
let interval;

function goToItem(index) {
    items.forEach((item) => {
        item.style.display = "none";
    });
    items[index].style.display = "flex";
}

function startInterval() {
    interval = setInterval(() => {
        currentItemIndex++;
        if (currentItemIndex >= items.length) {
            currentItemIndex = 0;
        }
        goToItem(currentItemIndex);
    }, 10000);
}

function stopInterval() {
    clearInterval(interval);
}

prevButton.addEventListener("click", () => {
    stopInterval();
    currentItemIndex--;
    if (currentItemIndex < 0) {
        currentItemIndex = items.length - 1;
    }
    goToItem(currentItemIndex);
});

nextButton.addEventListener("click", () => {
    stopInterval();
    currentItemIndex++;
    if (currentItemIndex >= items.length) {
        currentItemIndex = 0;
    }
    goToItem(currentItemIndex);
});

startInterval();
