// Присваиваем обработчик события к input-полю
document.getElementById("form").addEventListener("submit", validEmail);

// Функция для валидации данных
function validEmail(event) {
    // Преоброзование события к стандартному виду
    event.preventDefault();

    // Выборка значений по ID
    var email = document.getElementById("email").value;
    var textError = document.getElementById("error");

    // Переменная для ошибки
    var error = "";

    // Валидация данных
    if (email == "") {
        error = "Enter your email";
    } else if (email.includes("@") === false) {
        error = "Write correct email. Example: jhon@mail.ru";
    } 

    // Вывод сообщения об ошибке
    if (error != "") {
        textError.innerHTML = error;
        textError.style.color = "red";
    } else {
        textError.innerHTML = "We appreciate you!";
        textError.style.color = "green";
    }
}