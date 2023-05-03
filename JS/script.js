const buttons = document.querySelectorAll(".button");
const buttonValiders = document.querySelectorAll(".buttonValider");
const inputs = document.querySelectorAll(".inputInfos");



for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function () {
        inputs[i].disabled = false;
        buttons[i].classList.toggle("inactif");
        buttonValiders[i].classList.toggle("active");
    });
}

