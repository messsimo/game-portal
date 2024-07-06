// Глобальная переменная для отслеживания текущего изображения
var index = 0;
var images = ["images/slider1.png", "images/slider2.png"];

var num = document.getElementById("num");

// Создание события
document.getElementById("slider").addEventListener("click", slider);

function slider() {
    // Переключение изображения
    index = (index + 1) % images.length;
    document.getElementById("img").src = images[index];
}