<!DOCTYPE html>
<html lang="ru"> <!-- Указание языка страницы -->

<head>
    <meta charset="UTF-8"> <!-- Кодировка символов -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Для адаптации на мобильных устройствах -->
    <title>Контакты</title> <!-- Заголовок страницы -->
    <link rel="stylesheet" href="styles.css"> <!-- Подключение стилей -->
</head>

<body>
    <!-- Верхняя часть сайта -->
    <header>
        <h1>Контакты</h1> <!-- Основной заголовок -->
        <!-- Меню навигации -->
        <nav>
            <a href="index.html">Главная</a> <!-- Ссылка на главную страницу -->
            <a href="contact.php">Контакты</a> <!-- Ссылка на текущую страницу -->
        </nav>
    </header>
    <!-- Основной контент -->
    <main>
        <!-- Раздел с формой отправки сообщения -->
        <section>
            <h2>Напишите нам</h2> <!-- Подзаголовок -->
            <form method="post" action="contact.php"> <!-- Отправка данных на этот же файл -->
                <!-- Поле для имени -->
                <label for="name">Ваше имя:</label>
                <input type="text" id="name" name="name" required> <!-- Обязательное поле -->
                <br><br>
                <!-- Поле для сообщения -->
                <label for="message">Ваше сообщение:</label>
                <textarea id="message" name="message" required></textarea> <!-- Обязательное поле -->
                <br><br>
                <button type="submit">Отправить</button> <!-- Кнопка отправки -->
            </form>
        </section>
        <!-- Раздел для отображения отправленных данных -->
        <section>
            <?php
            // Проверяем, была ли отправлена форма
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                // Получаем и фильтруем данные из формы
                $name = htmlspecialchars($_POST['name']); // Имя пользователя
                $message = htmlspecialchars($_POST['message']); // Сообщение пользователя
                // Выводим благодарственное сообщение
                echo "<h3>Спасибо, $name!</h3>";
                echo "<p>Ваше сообщение: $message</p>";
            }
            ?>
        </section>
    </main>
    <!-- Нижняя часть сайта -->
    <footer>
        <p>&copy; 2024 Простой сайт. Все права Сани защищены.</p>
    </footer>
</body>

</html>