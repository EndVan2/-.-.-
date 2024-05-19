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
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            flex-shrink: 0; /* Предотвращение сжатия элемента */
        }
        
        .center_container {
            width: 80%;
            height: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            flex: 1;
            flex-shrink: 0; /* Предотвращение сжатия элемента */
        }
        
        .life {
            width: 18%;
            height: 75%;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            border: 2px solid black; /* Устанавливаем черную границу */
            border-radius: 10px; /* Делаем закругленные углы, чтобы получился полый квадрат */
            padding: 20px;
            flex-shrink: 0; /* Предотвращение сжатия элемента */
            
        }
        
        
        
        .map {
            width: 30%;
            height: 30%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            
        }
        
        
        
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
        }
        
        .modal-content {
            display: block;
            margin: 50px auto;
            max-width: 80%;
            max-height: 80%;
        }
        
        .close {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #fff;
            font-size: 30px;
            cursor: pointer;
        }
        
        .close-popup-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #fff;
            font-size: 30px;
            cursor: pointer;
         }
         
         #modal-popup {
             margin: 0 auto;
         }
         
         #popup_description {
             width: 1200px;
             height: 200px;
             background-color: #fff;
             display: flex;
             flex-direction: column;
             align-items: center;
         }
         
         .place {
            
            width: 100px;
            height: 80px;
            margin: 0 10px 10px 0; /* Боковой отступ 10px, нижний отступ 10px */
            
            
        }
            
        .place:hover {
            border: 2px solid black;
            border-radius: 5px; /* Добавляем закругление углов для квадратика */
            padding: 5px; /* Добавляем отступ вокруг элемента */
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
        <div class="territory">
            <h1>Территория санатория</h1>
        </div>
        
        <div class="center_container">
            
            <div class="life">
                
                <a style="text-decoration: none; width: 100px; height: 80px;  " href="#">
                <div class="place" id="place1">
                    <img style="width: 100px; height: 80px;" src="Img/pool.png" alt="Место 1" class="place-image">
                    <p class="place-text">Бассейн</p>
                </div>
                </a>
                
                <a style="text-decoration: none; width: 100px; height: 80px;" href="#">
                    <div class="place" id="place2">
                    <img style="width: 100px; height: 80px;" src="Img/semi-house.png" alt="Место 2" class="place-image">
                    <p class="place-text">Жилищные корпуса</p>
                </div>
                </a>
                
                
               
                <a style="text-decoration: none; width: 100px; height: 80px;" href="#">
                    <div class="place" id="place3">
                    <img style="width: 100px; height: 80px;" src="Img/tennis.png" alt="Место 3" class="place-image">
                    <p class="place-text">Теннисный корт</p>
                </div>
                </a>
                
                <a style="text-decoration: none; width: 100px; height: 80px;" href="#">
                    <div class="place" id="place4">
                    <img style="width: 100px; height: 80px;" src="Img/fontan.png" alt="Место 4" class="place-image">
                    <p class="place-text">Фонтан</p>
                </div>
                </a>
                
                <a style="text-decoration: none; width: 100px; height: 80px;" href="#">
                    <div class="place" id="place5">
                    <img style="width: 100px; height: 80px;" src="Img/deti_pict.png" alt="Место 5" class="place-image">
                    <p class="place-text">Детская площадка</p>
                </div>
                </a>
                
                <a style="text-decoration: none; width: 100px; height: 80px;" href="#">
                    <div class="place" id="place6">
                    <img style="width: 100px; height: 80px;" src="Img/cotej_pict.png" alt="Место 6" class="place-image">
                    <p class="place-text">Коттеджи</p>
                </div>
                </a>
                
                <a style="text-decoration: none; width: 100px; height: 80px;" href="#">
                    <div class="place" id="place7">
                    <img style="width: 100px; height: 80px;" src="Img/besedka_pict.png" alt="Место 7" class="place-image">
                    <p class="place-text">Беседка на озере</p>
                </div>
                </a>
                
                <a style="text-decoration: none; width: 100px; height: 80px;" href="#">
                    <div class="place" id="place8">
                    <img style="width: 100px; height: 80px;" src="Img/banya_pict.png" alt="Место 8" class="place-image">
                    <p class="place-text">Баня</p>
                </div>
                </a>
                
                <a style="text-decoration: none; width: 100px; height: 80px;" href="#">
                    <div class="place" id="place9">
                    <img style="width: 100px; height: 80px;" src="Img/sport_pict.png" alt="Место 9" class="place-image">
                    <p class="place-text">Спорткомплекс</p>
                </div>
                </a>
                
                
            </div>
            
            <div class="map">
            <a href="#"><img style="witdh: 400px; height: 300px;" src="Img/sanatorium-map.png" alt="Изображение санатория" class="image" id="sanatorium-map"></a>
        
            </div>
    
            <div id="modal" class="modal">
                <span class="close">&times;</span>
                <img src="" class="modal-content" id="modal-image">
            </div>
            
            <div id="modal-popup1" class="modal">
                <button class="close-popup-btn">&times;</button>
                <img style="width: 1200px; height: 800px;" id="popup_Image" src="Img/pool_inner.png" alt="Image">
                <div id="popup_description">
                    <h2 style="color: black;">Крытый бассейн</h2>
                    <h3>Бассейн, в котором вы можете проводить время круглый год. Средняя температура воды ~ 20°. Хорошее освещение, Спа салоны, а также гидромассажные бассейны. </h3>
                    <h3>Открыт с 8:00 до 22:00. Вход - бесплатный.</h3>
                </div>
                
            </div>
            
            <div id="modal-popup2" class="modal">
                <button class="close-popup-btn">&times;</button>
                <img style="width: 1200px; height: 800px;" id="popup_Image" src="Img/kvartira.png" alt="Image">
                <div id="popup_description">
                    <h2 style="color: black;">Жилищные корпуса</h2>
                    <h3>Проживание в комфортабельных жилищных корпусах с уютными номерами. Различные категории номеров: от стандартных до люксов. </h3>
                    <h3>Услуги горничной, Wi-Fi, завтрак включен. Возможность дополнительных удобств по предварительному запросу.</h3>
                    <h3>Бесперебойное электричество круглосуточно. Предварительное бронирование рекомендуется.</h3>
                </div>
                
            </div>
            
            
            <div id="modal-popup3" class="modal">
                <button class="close-popup-btn">&times;</button>
                <img style="width: 1200px; height: 800px;" id="popup_Image" src="Img/tennis.png" alt="Image">
                <div id="popup_description">
                    <h2 style="color: black;">Крытый теннисный корт</h2>
                    <h3>Теннисный корт, где вы можете насладиться игрой в любое время года. Профессиональные тренеры, аренда оборудования. </h3>
                    <h3>Работает с 9:00 до 20:00. Предварительная запись рекомендуется.</h3>
                </div>
            </div>
            
            <div id="modal-popup4" class="modal">
                <button class="close-popup-btn">&times;</button>
                <img style="width: 1200px; height: 800px;" id="popup_Image" src="Img/fontan_inner.png" alt="Image">
                <div id="popup_description">
                    <h2 style="color: black;">Фонтан</h2>
                    <h3>Фонтан, являющийся центром санатория. Служит верой и правдой вот уже 50 лет! Его главные обязанности: быть неотразимым летом - собирая вокруг себя сотни и тысячи проживюащих. Зимой же - впадать в спячку, дожидаясь летнего сезона и тёплых улыбок.  </h3>
                    <h3>Работает круглые сутки, 180 дней в году. 01.05.- 30. 10</h3>
                </div>
            </div>
            
            <div id="modal-popup5" class="modal">
                <button class="close-popup-btn">&times;</button>
                <img style="width: 1200px; height: 800px;" id="popup_Image" src="Img/deti_img.png" alt="Image">
                <div id="popup_description">
                    <h2 style="color: black;">Детская площадка</h2>
                    <h3>Детская площадка - идеальное место для игр и развлечений в веселой и безопасной обстановке. Разнообразные аттракционы и игровые площадки подходят для детей разного возраста. Родителям предоставляется возможность отдохнуть, наблюдая за игрой своих детей.  </h3>
                    <h3>Открыта с 06:00 и до 22:00. Следим за здоровьем детей вместе!</h3>
                </div>
            </div>
            
            <div id="modal-popup6" class="modal">
                <button class="close-popup-btn">&times;</button>
                <img style="width: 1200px; height: 800px;" id="popup_Image" src="Img/cotej_png.png" alt="Image">
                <div id="popup_description">
                    <h2 style="color: black;">Коттеджи</h2>
                    <h3>Коттеджи представляют собой уютные домики, идеальные для семейного отдыха или уединенного отпуска. В коттеджах имеется все необходимое для комфортного проживания: просторные комнаты, кухня, удобства и возможность насладиться природой. </h3>
                    <h3>Аренда обговаривается при бронировании поездки в санаторий.</h3>
                </div>
            </div>
            
            <div id="modal-popup7" class="modal">
                <button class="close-popup-btn">&times;</button>
                <img style="width: 1200px; height: 800px;" id="popup_Image" src="Img/besedka_img.png" alt="Image">
                <div id="popup_description">
                    <h2 style="color: black;">Беседка на озере</h2>
                    <h3>Беседка на озере - уютное место для отдыха с прекрасным видом на водную гладь. Идеально подходит для уединенного обеда на свежем воздухе или для проведения мероприятий под открытым небом. Предоставляет возможность насладиться природной красотой.  </h3>
                    <h3>Открыта круглые сутки.</h3>
                </div>
            </div>
            
            <div id="modal-popup8" class="modal">
                <button class="close-popup-btn">&times;</button>
                <img style="width: 1200px; height: 800px;" id="popup_Image" src="Img/banya_img.png" alt="Image">
                <div id="popup_description">
                    <h2 style="color: black;">Баня</h2>
                    <h3>Баня - место, где можно отдохнуть, расслабиться и насладиться полезными процедурами. Парная с традиционной русской баней, бассейн для охлаждения, комната отдыха и возможность заказать массаж делают посещение бани приятным и полезным для здоровья.  </h3>
                    <h3>Часы работы: 09:00 - 21:00</h3>
                </div>
            </div>
            
            <div id="modal-popup9" class="modal">
                <button class="close-popup-btn">&times;</button>
                <img style="width: 1200px; height: 800px;" id="popup_Image" src="Img/sport_img.png" alt="Image">
                <div id="popup_description">
                    <h2 style="color: black;">Спорткомплекс</h2>
                    <h3>Спорткомплекс предлагает широкий спектр спортивных возможностей для активного отдыха. Здесь вы найдете современное оборудование для тренировок, групповые занятия, бассейн, теннисные корты и другие спортивные площадки. В здоровом теле - здоровый дух!  </h3>
                    <h3>Часы работы: 08:00 - 21:00</h3>
                    
                </div>
            </div>
     
        </div>
        
    
    </center>
    
    
    

    
    
    <footer>
        <p>&copy; 2024 PeaceOfMind. All rights reserved.</p>
    </footer>
    
</body>

<script>
        const places = document.querySelectorAll('.place');
        const image = document.getElementById('sanatorium-map');
        const modal = document.getElementById('modal');
        const modalImage = document.getElementById('modal-image');
        const closeModal = document.querySelector('.close');
        const popup_Image = document.getElementById('.popup_Image');
        const popupDescription = document.getElementById('.popup-description');
        const closePopupBtn = document.querySelectorAll('.close-popup-btn');
        
        image.addEventListener('click', function() {
            modal.style.display = 'block';
            modalImage.src = this.src;
        });
        
        places.forEach((place, index) => {
            const modalPopup = document.getElementById(`modal-popup${index + 1}`);
            
            place.addEventListener('click', () => {
                if (modalPopup) {
                    const popupImage = modalPopup.querySelector('#popup_Image');
                    const popupDescription = modalPopup.querySelector('#popup-description');
                    
                    // Проверка на существование элемента и его стилизация
                    if (modalPopup && modalPopup.style) {
                        modalPopup.style.display = 'block';
                    } else {
                        console.error('modalPopup or modalPopup.style is null or undefined');
                    }
        
                    if (popupImage && place.querySelector('#popup_Image')) {
                        popupImage.src = place.querySelector('#popup_Image').src;
                    }
        
                    if (popupDescription && place.querySelector('#popup-description')) {
                        popupDescription.textContent = place.querySelector('#popup-description').textContent;
                    }
                } else {
                    console.error('modalPopup is null or undefined');
                }
            });
        });
        
        closeModal.addEventListener('click', () => {
            modal.style.display = 'none';
        });
        
        

        closePopupBtn.forEach((btn) => {
            btn.addEventListener('click', (event) => {
                const modalPopup = event.target.closest('.modal');
                
                if (modalPopup) {
                    modalPopup.style.display = 'none';
                } else {
                    console.error('Modal popup not found');
                }
            });
        });
        
            
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
                
</script>
    

</html>