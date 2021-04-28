<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Лилия Шабалина</title>
</head>
<body>
    <div class="header"><!-- ---------- Header ---------- -->
        <div class="wrapper">

            <div class="header_wrapper">

                <div class="header_title">
                    <h1>
                        Лилия Шаббалина
                    </h1>
                </div>    

                <ul class="header_nav">
                    <li class="nav_item">
                        <a href="#offer" class="nav_link">
                            Услуги и цены
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#work" class="nav_link nav_link_color">
                            Как работаю
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#reviews" class="nav_link">
                            Отзывы
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#contacts" class="nav_link">
                            Контакты
                        </a>
                    </li>
                </ul>         

            </div>

            <div class="header_subtitle">
                <h2>
                    Ваш таргетолог в Инстаграм
                </h2>
            </div>
            
        </div>
    </div>

    

    <div class="intro"><!-- ---------- Intro ---------- -->
        <div class="intro_wrapper">

            <img src="img/photo1.png" alt="" class="intro_img">

            <div class="intro_body">

                <h1 class="intro_title_1">
                    Не знаешь где найти клиентов?
                </h1>
                <h1 class="intro_title_2">
                    Хочешь увеличить доход?
                </h1>
                <a href="mailto:shabbalina@mail.ru?subject=ТемаПисьма&body=ТелоПисьма" target="_blank" rel="noopener noreferrer" class="intro_button">
                    Закажи рекламу
                </a>

            </div>

        </div>
    </div>

    <div class="offer" id="offer"><!-- ---------- Offer ---------- -->
        <div class="wrapper">

            <h2 class="offer_title">
                Услуги и цены
            </h2>

            <div class="offer_cards">

                <div class="offer_card">
                
                    <h2 class="offer_card_text">
                        Единовременная настройка<br>
                        таргетированной рекламы <br>
                        (без оптимизации и ведения)
                    </h2>
                    <h2 class="offer_card_price">
                        15 000 ₽ + рекламный бюджет
                    </h2>
    
                </div>

                <div class="offer_card">
                
                    <h2 class="offer_card_text">
                        Полная настройка и ведение<br>
                        рекламной кампании<br>
                        (с разработкой рекламных макетов)
                    </h2>
                    <h2 class="offer_card_price">
                        от 20 000 ₽ в месяц + рекламный бюджет
                    </h2>
    
                </div>

                <div class="offer_card">
                
                    <h2 class="offer_card_text">
                        Разработка рекламных макетов с<br>
                        тезисами
                    </h2>
                    <h2 class="offer_card_price">
                        5 000 ₽ (5 креативов)
                    </h2>
    
                </div>

                <div class="offer_card">
                
                    <h2 class="offer_card_text">
                        Консультация
                    </h2>
                    <h2 class="offer_card_price">
                        3 500 ₽
                    </h2>
    
                </div>

            </div>

            <p class="offer_subtitle">
                <span class="offer_subtitle_color">ВАЖНО! </span>
                Рекламный бюджет не входит в стоимость работ и оплачивается клиентом напрямую в Facebook/VK/ТикТок!
            </p>
        </div>
    </div>



    <div class="request" id="request"><!-- ---------- Request ---------- -->
        <div class="wrapper">

            <div class="request_body">
                
                <h2 class="request_title">
                    Записаться на консультацию
                </h2>

                <h2 class="request_subtitle">
                    Оставьте свой номер телефона и я Вам перезвоню
                </h2>

                <?php
                    if(!isset($_POST['name']) and !isset($_POST['tel'])) {
                    ?>
                        <form class="request_form" action="index.php#request" method="post">
                        <div class="form_body">
                            <input type="text" name="name" class="form_field" placeholder="Ваше имя" required>
                            <input type="tel" name="tel" class="form_field" placeholder="+7___-___-__-__" required>
                            <button type="submit" class="form_button">Отправить*</button>
                        </div>
                        </form>

                        <h2 class="request_info">
                            *Нажимая эту кнопку Вы соглашаетесь с политикой конфиденциальности
                        </h2>
                    <?php
                    } else {
                        $name = $_POST['name'];
                        $tel = $_POST['tel'];

                        $name = urldecode($name);
                        $tel = urldecode($tel);

                        if (mail("shabbalina@mail.ru", "Заявка с сайта", "Имя: ".$name."\n\nТелефон: ".$tel."\n")) {
                            echo "<h2 style='color: green; margin-bottom: 20px;'>Сообщение успешно отправлено</h2>";
                        } else {
                            echo "<h2 style='color: red; margin-bottom: 20px;'>При отправке сообщения возникли проблемы</h2>";
                        }
                    }
                ?>

            </div>

        </div>
    </div>


    <div class="work" id="work"><!-- ---------- Work ---------- -->
        <div class="wrapper">

            <h2 class="work_title">
                Как работаем
            </h2>

            <div class="work_cards">

                <div class="work_card">
                    <img src="img/work_icon_1.svg" alt="" class="work_card_icon">
                    <h2 class="work_card_title">
                        Оформление заявки
                    </h2>
                    <p class="work_card_text">
                        Просто оформите заявку на сайте или позвоните мне. Направлю Вам бриф для заполнения.
                    </p>
                </div>

                <div class="work_card">
                    <img src="img/work_icon_2.svg" alt="" class="work_card_icon">
                    <h2 class="work_card_title">
                        Обсуждение проекта
                    </h2>
                    <p class="work_card_text">
                        Обсуждения проходят в удобной для Вас форме. Это может быть встреча оффлайн или через любой мессенджер.
                    </p>
                </div>

                <div class="work_card">
                    <img src="img/work_icon_3.svg" alt="" class="work_card_icon">
                    <h2 class="work_card_title">
                        Заключение договора
                    </h2>
                    <p class="work_card_text">
                        Заполняем все необходимые документы.
                    </p>
                </div>

            </div>

            <div class="work_links">

                <a href="#" class="work_link">
                    Как оказывается услуга<br>
                    и что в нее входит
                </a>

                <a href="#" class="work_link">
                    Дополнительные услуги
                </a>

            </div>

        </div>
    </div>

    

    <div class="about"><!-- ---------- About Me ---------- -->
        <div class="about_wrapper">

            <div class="about_body">

                <h2 class="about_title">
                    О себе
                </h2>
    
                <p class="about_text">
                    Меня зовут Лилия Шабалина.<br>
                    <br>
                    Я занимаюсь рекламой в<br>
                    Facebook/Instagram.<br>
                    <br>
                    Я знаю точно кому, где и как<br>
                    рассказать о вашем продукте!<br>    
                </p>

            </div>

            <img src="img/photo2.png" alt="" class="about_img"> 

        </div>
    </div>



    <div class="reviews" id="reviews"><!-- ---------- Reviews ---------- -->
        <div class="wrapper">

            <h2 class="reviews_title">
                Отзывы
            </h2>

            <div class="reviews_cards">

                <img src="img/review.svg" alt="">
                <img src="img/review.svg" alt="">
                <img src="img/review.svg" alt="">
                <img src="img/review.svg" alt="">

            </div>

            <a href="#" class="reviews_button">
                Больше отзывов в Инстаграмм
            </a>

        </div>
    </div>



    <div class="footer" id="contacts"><!-- ---------- Footer ---------- -->
        <div class="wrapper">

            <div class="footer_wrapper">

                <div class="footer_title">
                    <h1>
                        Лилия Шаббалина
                    </h1>
                </div>
    
                <ul class="contacts_list">

                    <li class="contacts_item">
                        
                            <img class="contacts_icon" src="img/mail_icon.svg" alt="">
                        
                    </li>
                    <li class="contacts_item">
                        <a href="#" class="contacts_link">
                            shabbalina@mail.ru
                        </a>
                    </li>
                    <li class="contacts_item">
                        
                            <img class="contacts_icon" src="img/phone_icon.svg" alt="">
                        
                    </li>
                    <li class="contacts_item">
                        <a href="#" class="contacts_link">
                            8 916 028-32-69
                        </a>
                    </li>
                    <li class="contacts_item">
                        <a href="#">
                            <img class="contacts_socials_icon" src="img/ellipse.svg" alt="">
                        </a>
                    </li>
                    <li class="contacts_item">
                        <a href="#">
                            <img class="contacts_socials_icon" src="img/ellipse.svg" alt="">
                        </a>
                    </li>
                    <li class="contacts_item">
                        <a href="#">
                            <img class="contacts_socials_icon" src="img/ellipse.svg" alt="">
                        </a>
                    </li>
                </ul>

            </div>

            <div class="footer_wrapper">

                <div class="footer_date">
                    © 2021
                </div>

                <ul class="footer_nav">
                    <li class="nav_item">
                        <a href="#offer" class="nav_link">
                            Услуги и цены
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#work" class="nav_link nav_link_color">
                            Как работаю
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#reviews" class="nav_link">
                            Отзывы
                        </a>
                    </li>
                </ul> 

            </div>
            
        </div>
    </div>

</body>
</html>