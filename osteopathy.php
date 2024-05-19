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
        
        .history {
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
        }
        
        .history-block {
            flex: 1;
            padding: 20px;
            border: 1px solid #ccc;
            margin: 10px;
        }
        
        @media (max-width: 768px) {
            .history-block {
                flex: 1 1 100%; /* Блоки занимают всю доступную ширину на мобильных устройствах */
            }
        }
        
        .center_container {
            width: 80%;
            height: 100%;
            display: flex;
            flex-direction: column;
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
        <img style="width: 300px; height: 200px;" src="Img/osteopathy.png" alt="">
        <h1>Консультация невролога </h1>
        <h2>Показания для консультации врача-невролога:</h2>
        <ul>
            <li style="width: 200px;">болевой синдром при заболеваниях позвоночника, грыжах межпозвонковых дисков;</li>
            <li style="width: 200px;">онемение конечностей;</li>
            <li style="width: 200px;">головные боли;</li>
            <li style="width: 200px;">головокружения;</li>
        </ul>
        <br>
        <a style="width: 200px; height: 100px; border: 2px solid black; border-radius: 10px; padding: 20px;" href="#">Заказать услугу</a>
    </center>
    
    <footer>
        <p>&copy; 2024 PeaceOfMind. All rights reserved.</p>
    </footer>
    
</body>
</html>