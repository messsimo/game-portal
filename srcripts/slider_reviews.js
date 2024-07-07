// Изначальный индекс блока отзыва
var reviewIndex = 1;

// Вызов функции показа отзыва
showReview(reviewIndex);

// Функция по прибавлению отзыва
function nextReview(i) {
    showReview(reviewIndex += i);
}

// Функция для показа действующего отзыва
function currentReview(i) {
    showReview(reviewIndex = i);
}

// Функция смены действующего блока отзыва
function showReview(i) {
    // Выборка элементов
    var reviews = document.getElementsByClassName("block");
    var dots = document.getElementsByClassName("dot");

    // Условие для присвоения индекса текущему отзыву
    if (i > reviews.length) {
        reviewIndex = 1;
    } else if (i < 1) {
        reviewIndex = reviews.length;
    }

    // Перебор массива с отзывами и присвоение класса .active для .block
    for (var el = 0; el < reviews.length; el++) {
        reviews[el].className = reviews[el].className.replace(" active", "");
    }

    // Перебор массива с точками и присвоение класса .active для .dot
    for (var el = 0; el < dots.length; el++) {
        dots[el].className = dots[el].className.replace(" active", "");
    }

    // Добавление класса .active действущему классу
    reviews[reviewIndex - 1].className += " active";
    dots[reviewIndex - 1].className += " active";
}
