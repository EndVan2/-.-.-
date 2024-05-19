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
            min-height: 100vh;
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
            width: 85%;
            height: 60%;
            align-items: center;
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
        
        .services-list {
            display: flex;
            flex-wrap: wrap;
            list-style-type: none;
            padding: 0;
            flex: 1;
        }
        
        .services-list li {
            width: 100%; /* Элементы списка занимают всю доступную ширину */
            margin-bottom: 20px; /* Отступ между элементами списка */
            display: flex;
            
        }
        
        .service-image {
            width: 150px; /* Ширина изображения */
            height: auto; /* Автоматическая высота изображения */
            margin-right: 20px; /* Отступ между изображением и описанием */
            
        }
        
        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
        
        .service-image:hover {
            transition: opacity 1s; /* Плавное изменение прозрачности при мигании */
        
            /* CSS анимация для мигания */
            animation: blink 1s;
        }
        
        .service-description {
            text-align: center;
        }
        
        .service-description h3 {
            margin-top: 0; /* Убираем верхний отступ у заголовка */
        }
        
        .service-description p {
            margin: 0; /* Убираем внутренние отступы у текста описания */
        }
        
        footer {
            background-color: #f2f2f2;
            width: 100%;
            height: 20%; 
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
    
    
    
    <a style="text-decoration: none; color: black;" href="consult_nevrolog.php">
                       
    </a>
    
    
    
    <center>
        <h1>Услуги</h1>
        <ul class="services-list">
            <li style="width: 350px; display: flex; flex-direction: column;">
                    <a style="text-decoration: none; color: black;" href="consult_nevrolog.php">
                       <img style="width: 300px; height: 200px;" src="Img/consult_nevrolog.png" alt="Услуга1" class="service-image">
                    </a>
    
                    <div class="service-description">
                        <h3>Консультация невролога</h3>
                        <p>Грамотная помощь людям с заболеваниями центральной и периферической нервной системы.</p>
                    </div>
                    
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="consult_cardio.php">
                    <img style="width: 300px; height: 200px;" src="Img/consult_cardio.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Консультация кардиолога</h3>
                    <p>Врачи санатория - команда профессионалов высокого уровня</p>
                </div>
                
            </li>
        
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="aqua_health.php">
                    <img style="width: 300px; height: 200px;" src="Img/aqua_health.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Водолечение</h3>
                    <p>Водные процедуры активно используются в период восстановления после перенесенных заболеваний, травм или оперативных вмешательств.</p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="dirt_health.php">
                    <img style="width: 300px; height: 200px;" src="Img/dirt_health.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Грязелечение</h3>
                    <p>Грязи оказывают рассасывающее, противовоспалительное действие, нормализует тонус мышц, улучшает состояние кожи.</p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="fiz_health.php">
                    <img style="width: 300px; height: 200px;" src="Img/fiz_health.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Лечебная физкультура</h3>
                    <p>Правильное применение способствует ускорению выздоровления, восстановлению нарушенной трудоспособности и возвращению больных к активной жизни.</p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="manual.php">
                    <img style="width: 300px; height: 200px;" src="Img/manual.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Мануальная терапия</h3>
                    <p>Мануальная терапия — комплекс методов ручной коррекции различных патологических состояний опорно-двигательной системы.</p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="massage.php">
                    <img style="width: 300px; height: 200px;" src="Img/massage.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Массаж</h3>
                    <p>В области массажной терапии более 80 видов лечения, каждый из которых требует определенных навыков и методов. </p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="mechano.php">
                    <img style="width: 300px; height: 200px;" src="Img/mechano.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Механотерапия</h3>
                    <p>Неоценимую помощь пациентам и врачам-реабилитологам оказывает методика механотерапии на аппарате пассивной разработки движений Artromot'е.</p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="stomatology.php">
                    <img style="width: 300px; height: 200px;" src="Img/stomatology.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Стоматология</h3>
                    <p>В санатории «Дюны» работает стоматологический кабинет, в своей работе врач применяет современные методы лечения зубов и материалы только лучшего качества.</p>
                </div>
            
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="therapy.php">
                    <img style="width: 300px; height: 200px;" src="Img/therapy.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Консультация терапевта</h3>
                    <p>Врачи санатория - команда профессионалов высокого уровня</p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="thermo.php">
                    <img style="width: 300px; height: 200px;" src="Img/thermo.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Термальные процедуры</h3>
                    <p>Теплолечение играет важную роль в профилактике респираторных заболеваний.</p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="trauma.php">
                    <img style="width: 300px; height: 200px;" src="Img/trauma.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Консультация травматолога-ортопеда</h3>
                    <p>Врачи санатория - команда профессионалов высокого уровня</p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="barber.php">
                    <img style="width: 300px; height: 200px;" src="Img/barber.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Парикхмахерская</h3>
                    <p>На территории санатория работают профессионалы-парикхмахеры, любая причёска для которых - плёвое дело.</p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="cosmetic.php">
                    <img style="width: 300px; height: 200px;" src="Img/cosmetic.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Косметология</h3>
                    <p>Одна из самых популярных, эффективных, безопасных и доступных бьюти-процедур в мире · Без боли и раздражения. Качественный результат.</p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="diagnos.php">
                    <img style="width: 300px; height: 200px;" src="Img/diagnos.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Функциональная диагностика</h3>
                    <p>Неотъемлемая часть лечения</p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="manikur.php">
                    <img style="width: 300px; height: 200px;" src="Img/manikur.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Маникюр</h3>
                    <p>По-настоящему качественный маникюр любой сложности, только опытные мастера</p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="osteopathy.php">
                    <img style="width: 300px; height: 200px;" src="Img/osteopathy.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Остеопатия</h3>
                    <p>В клинике санатория ведут прием опытные врачи остеопаты, имеющие большой опыт работы.</p>
                </div>
                
            </li>
            
            <li style="width: 350px; display: flex; flex-direction: column;">
                <a style="text-decoration: none; color: black;" href="pedikur.php">
                    <img style="width: 300px; height: 200px;" src="Img/pedikur.png" alt="Услуга2" class="service-image">
                </a>
                
                <div class="service-description">
                    <h3>Педикюр</h3>
                    <p>Профессиональный подход и приятная атмосфера. Пока мы делаем маникюр, вы отдыхаете.</p>
                </div>
                
            </li>
        </ul>
    </center>
    
    <footer>
        <p>&copy; 2024 PeaceOfMind. All rights reserved.</p>
    </footer>
    
</body>
</html>