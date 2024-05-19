<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Санаторий PeaceOfMind</title>
    
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            width: 100%;
            margin: 0 auto;
        }
        header {
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 20%;
            align-items: center;
            
        }
        
        .logo-section {
            width: 100%;
            height: 50%;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            background-color: rgb(75,163,221);
            
            
        }
        
        .contact {
            width: 20%;
            height: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
           
        }
        
        #phone_icon {
            width: 50px;
            height: 50px;
            font-size: 50px;
            align-items: center;
            display: flex;
            flex-direction: row;
            color: white;
            
        }
        
        
        nav {
            width: 80%;
            height: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        
        nav a {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 50px; /* Овальная форма */
            margin: 0 5px;
            background: linear-gradient(to right, #00FFFF, #00FF00); /* Градиентный цвет */
            color: #fff;
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 1);
            text-decoration: none;
            position: relative;
        }
        
        nav a::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border: 2px solid transparent; /* Прозрачная обводка */
            border-radius: 50px; /* Овальная форма */
            z-index: -1;
            transition: border-color 0.3s;
        }
        
        nav a:hover::before {
            border-color: #000; /* Черный цвет обводки при наведении */
        }
        
        center {
            width: 100%;
            height: 60%;
        }
        
        .photo {
            background-image: url('Img/san_photo.png'); /* Путь к фоновому изображению */
            background-size: cover; /* Растягивает изображение на всю область */
            background-position: center; /* Выравнивание изображения по центру */
            width: 100%;
            height: 100%; /* Высота секции */
            color: #fff; /* Цвет текста */
            text-align: center; /* Выравнивание текста по центру */
            padding: 20px; /* Отступы внутри секции */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .bron_btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 50px; /* Овальная форма */
            margin: 0 5px;
            background: linear-gradient(to right, #00FFFF, #00FF00); /* Градиентный цвет */
            color: black;
            text-decoration: none;
            width: 175px;
            height: 75px;
            position: relative;
            transition: box-shadow 0.3s;
        }
        
        .bron_btn:hover {
            box-shadow: 0 0 0 3px #fff; /* Черная обводка при наведении */
        }
        
        
    
        
        .center_container {
            width: 80%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .search {
            width: 100%;
            height: 20px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            
        }
        
        footer {
            background-color: #f2f2f2;
            width: 100%;
            min-height: 250px; 
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: auto;
            
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-section">
            <a href="#">
                <img style="width: 140px;" src="Img/Peace.png" alt="Логотип сайта">
            </a>
            <div class="contact">
                <div id="phone_icon">
                    &#9990;
                </div>
                <h2 style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5); color: #fff;">Контакты: 8-800-123-45-67</h2>
            </div>

        </div>
        <nav>
            <ul>
                <li><a href="index.php">Главная страница</a></li>
                <li><a href="about.php">О Санатории</a></li>
                <li><a href="life.php">Проживание</a></li>
                <li><a href="services.php">Услуги</a></li>
                <li><a href="program.php">Программы</a></li>
                <li><a href="action.php">Новости и акции</a></li>
            </ul>
        </nav>
    </header>

    <center>
        <div class="photo">
        
            <h1 style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 1);">Хотите провести лучшие 2 недели в своей жизни?</h1>
            <h2 style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 1);">Тогда записывайтесь к нам!</h2>
            <a class="bron_btn" href="#">
                <h2 style="text-shadow: 2px 2px 2px rgba(0, 0, 0, 1); color: #fff;">Забронировать</h2>
            </a>
        </div>

    </center>

    <footer>
        <p>&copy; 2024 PeaceOfMind. All rights reserved.</p>
    </footer>
</body>
</html>