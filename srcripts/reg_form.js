// Выборка элементов
var btnReg = document.getElementsByClassName("btn-reg")[0];
var btnSign = document.getElementsByClassName("btn-sign")[0];
var form = document.getElementsByClassName("form")[0];

// Присвоение события + функции смены позиции
btnReg.addEventListener("click", function() {
    form.classList.remove("active");
});

btnSign.addEventListener("click", function() {
    form.classList.add("active");
});

