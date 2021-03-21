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
                        Лилия Шабалина
                    </h1>
                </div>    

                <ul class="header_nav">
                    <li class="nav_item">
                        <a href="#offer" class="nav_link">
                            Услуги и цены
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
                <h2 class="intro_subtitle">
                    Есть решение:
                </h2>
                <h2 class="intro_title_3">
                    Закажи рекламу в Инстаграм
                </h2>
                <a href="mailto:shabbalina@mail.ru?subject=ТемаПисьма&body=ТелоПисьма" target="_blank" rel="noopener noreferrer" class="intro_button">
                    Заказать рекламу
                </a>

            </div>

        </div>
    </div>

    <div class="offer" id="offer"><!-- ---------- Offer ---------- -->
        <div class="offer_wrapper">

            <div class="offer_left">

                <h2 class="offer_title">
                    НАСТРОЙКА ТАРГЕТИРОВАННОЙ РЕКЛАМЫ
                </h2>
                <h2 class="offer_subtitle">
                    На увеличение подписчиков / регистрации на бесплатный <br>
                    инфопродукт /трафик на сайт /продажу товаров
                </h2>
                <h2 class="offer_price">
                    3000 руб
                </h2>

            </div>

            <div class="offer_right" align="right">

                <h2 class="offer_title">
                    ВЕДЕНИЕ И ПРОДВИЖЕНИЕ АККАУНТА Instagram
                </h2>
                <h2 class="offer_subtitle">
                    На увеличение подписчиков / регистрации на бесплатный инфопродукт /<br>
                    трафик на сайт / продажу товаров

                </h2>
                <h2 class="offer_price">
                    10 000 руб
                </h2>

            </div>

            <div class="offer_left">

                <h2 class="offer_title">
                    ПЕРСОНАЛЬНАЯ КОНСУЛЬТАЦИЯ
                </h2>
                <h2 class="offer_subtitle">
                    По Вашему аккаунту в Инстаграм/монетизации<br><br>
                </h2>
                <h2 class="offer_price">
                    2000 руб
                </h2>

            </div>

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
                        Лилия Шабалина
                    </h1>
                </div>
    
                <ul class="contacts_list">

                    <li class="contacts_item">
                        <a href="#">
                            <img class="contacts_icon" src="img/ellipse.svg" alt="">
                        </a>
                    </li>
                    <li class="contacts_item">
                        <a href="#" class="contacts_link">
                            shabbalina@mail.ru
                        </a>
                    </li>
                    <li class="contacts_item">
                        <a href="#">
                            <img class="contacts_icon" src="img/ellipse.svg" alt="">
                        </a>
                    </li>
                    <li class="contacts_item">
                        <a href="#" class="contacts_link">
                            8 916 028-32-69
                        </a>
                    </li>
                    <li class="contacts_item">
                        <a href="#">
                            <img class="contacts_icon" src="img/ellipse.svg" alt="">
                        </a>
                    </li>
                    <li class="contacts_item">
                        <a href="#">
                            <img class="contacts_icon" src="img/ellipse.svg" alt="">
                        </a>
                    </li>
                    <li class="contacts_item">
                        <a href="#">
                            <img class="contacts_icon" src="img/ellipse.svg" alt="">
                        </a>
                    </li>
                </ul>

            </div>
            
        </div>
    </div>

</body>
</html>