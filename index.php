<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="libs/jquery-3.6.0.min.js"></script>
    <title>Лилия Шаббалина</title>
</head>
<body>
    <div class="header"><!-- ---------- Header ---------- -->
        <div class="wrapper">

            <div class="header_phone">
                <img class="header_phone_icon" src="img/phone_icon.svg" alt="">
                <a href="tel:+79160283269" class="header_phone_link">
                    8 916 028-32-69
                </a>
            </div>
            <div class="header_burger burger">
                <span class="burger_line burger_line_1"></span>
                <span class="burger_line burger_line_2"></span>
                <span class="burger_line burger_line_3"></span>
            </div>

            <div class="header_wrapper">

                <div class="header_title">
                    <h1>
                        Лилия Шаббалина
                    </h1>
                </div>    

                <div class="header_nav">
                    <div class="header_title_hide">
                        <h1>
                            Лилия Шаббалина
                        </h1>
                    </div>   
                    <ul class="header_list">
                        <li class="nav_item">
                            <a href="#offer" class="nav_link">
                                Услуги и цены
                            </a>
                        </li>
                        <li class="nav_item">
                            <a href="#work" class="nav_link">
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
                    <div class="header_nav_close">
                        <span class="header_nav_close_line"></span>
                        <span class="header_nav_close_line"></span>
                    </div>
                    <div class="header_nav_contacts">
                        <a href="mailto:shabbalina@mail.ru?subject=ТемаПисьма&body=ТелоПисьма" target="_blank" rel="noopener noreferrer" class="work_expand_button">
                            Оставить заявку
                        </a>
                        <div class="work_expand_contacts">
                            <img class="work_expand_contacts_icon" src="img/phone_icon.svg" alt="">
                            <a href="tel:+79160283269" class="work_expand_contacts_link">
                                8 916 028-32-69
                            </a>
                        </div>
                        <div class="work_expand_contacts">
                            <img class="work_expand_contacts_icon" src="img/mail_icon.svg" alt="">
                            <a href="mailto:shabbalina@mail.ru?subject=ТемаПисьма&body=ТелоПисьма" target="_blank" rel="noopener noreferrer" class="work_expand_contacts_link">
                                shabbalina@mail.ru
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="header_subtitle">
                <h2>
                    Ваш таргетолог в Инстаграм
                </h2>
            </div>

            <script>
                $(document).ready(function(){

                    $('.burger').click(function() {
                        $('.header_nav').addClass('header_nav_active');
                    });

                    $('.header_nav_close').click(function() {
                        $('.header_nav').removeClass('header_nav_active');
                    });

                    $('.nav_link').click(function() {
                        $('.header_nav').removeClass('header_nav_active');
                    });
                
                });
            </script>
            
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
                <div class="intro_button">
                    <a href="mailto:shabbalina@mail.ru?subject=ТемаПисьма&body=ТелоПисьма" target="_blank" rel="noopener noreferrer" class="intro_button_link">
                        Закажи рекламу
                    </a>
                </div>

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
                    Заявка на консультацию
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

                        if (mail("shabbalina@mail.ru", "Заявка с сайта", "Имя: ".$name."\n\nТелефон: ".$tel."\n", "From: shabbalina.ru\r\n")) {
                            echo "<h2 class='msg_green'>Сообщение успешно отправлено</h2>";
                        } else {
                            echo "<h2 class='msg_red'>При отправке сообщения возникли проблемы</h2>";
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
                    <span class="work_card_num">01</span>
                    <img src="img/work_icon_1.svg" alt="" class="work_card_icon">
                    <h2 class="work_card_title">
                        Оформление заявки
                    </h2>
                    <p class="work_card_text">
                        Просто оформите заявку на сайте или позвоните мне. Направлю Вам бриф для заполнения.
                    </p>
                </div>

                <div class="work_card work_card_bg_grey">
                    <span class="work_card_num">02</span>
                    <img src="img/work_icon_2.svg" alt="" class="work_card_icon">
                    <h2 class="work_card_title">
                        Обсуждение проекта
                    </h2>
                    <p class="work_card_text">
                        Обсуждения проходят в удобной для Вас форме. Это может быть встреча оффлайн или через любой мессенджер.
                    </p>
                </div>

                <div class="work_card">
                    <span class="work_card_num">03</span>
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

                <span class="work_link_1 work_link">
                    Как оказывается услуга<br>
                    и что в нее входит
                </span>

                <span class="work_link_2 work_link">
                    Дополнительные услуги
                </span>                

                <script>
                    $(document).ready(function(){
                        $('.work_expand_1').hide();
                        $('.work_expand_2').hide();

                        $('.work_link_1').click(function() {
                            if ($(this).hasClass('work_link_active')) {
                                $(this).removeClass('work_link_active');
                                $(document).find('.work_expand_1').slideUp();
                            } else if ($('.work_link_2').hasClass('work_link_active')) {
                                $('.work_expand_2').slideUp();
                                $('.work_link_2').removeClass('work_link_active');
                                $(this).addClass('work_link_active');
                                $('.work_expand_1').delay(450).slideDown();
                            } else {
                                $(this).addClass('work_link_active');
                                $('.work_expand_1').slideDown();
                            }
                        });

                        $('.work_link_2').click(function() {
                            if ($(this).hasClass('work_link_active')) {
                                $(this).removeClass('work_link_active');
                                $(document).find('.work_expand_2').slideUp();
                            } else if ($('.work_link_1').hasClass('work_link_active')) {
                                $('.work_expand_1').slideUp();
                                $('.work_link_1').removeClass('work_link_active');
                                $(this).addClass('work_link_active');
                                $('.work_expand_2').delay(450).slideDown();
                            } else {
                                $(this).addClass('work_link_active');
                                $('.work_expand_2').slideDown();
                            }
                        });
                    
                    });
                </script>

            </div>

            <div class="work_expand_1 work_expand">
                <ul>
                    <li>
                        <p>
                            Направляю Вам бриф для заполнения.
                        </p>
                    </li>
                    <li>
                        <p>
                            Проверяю посадочные площадки на готовность к приему людей и на соответствие целям рекламы (сайт, профиль соцсети). Предоставляю рекомендации что нужно изменить или дополнить.
                        </p>
                    </li>
                    <li>
                        <p>
                            Создаю стратегию запуска компании (какие цели будем использовать, с какой аудитории начинаем, куда льем трафик).
                        </p>
                    </li>
                    <li>
                        <p>
                            Устанавливаю пиксель, при наличии сайта.
                        </p>
                    </li>
                    <li>
                        <p>
                            Подготавливаю для Вас рекламные тексты и создаем креативы. В стоимость входят не более 8-ти креативов, далее 500 руб. за креатив.
                        </p>
                    </li>
                    <li>
                        <p>
                            Сложные анимированные креативы создаются за дополнительную плату – от 1500 руб. за креатив.
                        </p>
                    </li>
                    <li>
                        <p>
                            Создаю аудитории (используем Ваши источники для создания look-a-like – базу с номерами телефонов Ваших клиентов, аудитории сайта или профиля в Instagram).
                        </p>
                    </li>
                    <li>
                        <p>
                            Запускаю тестовые рекламные компании для выявления лучших рабочих креативов, аудиторий.
                        </p>
                    </li>
                    <li>
                        <p>
                            Анализирую запущенные рекламные кампании и оптимизирую их.
                        </p>
                    </li>
                    <li>
                        <p>
                            Масштабирую лучшие кампании (увеличиваем число целевых действий – заявки, клики, конверсии, при сохранении их стоимости).
                        </p>
                    </li>
                    <li>
                        <p>
                            Запускаю кампании ретаргета.
                        </p>
                    </li>
                </ul>
                <a href="mailto:shabbalina@mail.ru?subject=ТемаПисьма&body=ТелоПисьма" target="_blank" rel="noopener noreferrer" class="work_expand_button">
                    Оставить заявку
                </a>
                <div class="work_expand_contacts">
                    <img class="work_expand_contacts_icon" src="img/phone_icon.svg" alt="">
                    <a href="tel:+79160283269" class="work_expand_contacts_link">
                        8 916 028-32-69
                    </a>
                </div>
                <div class="work_expand_contacts">
                    <img class="work_expand_contacts_icon" src="img/mail_icon.svg" alt="">
                    <a href="mailto:shabbalina@mail.ru?subject=ТемаПисьма&body=ТелоПисьма" target="_blank" rel="noopener noreferrer" class="work_expand_contacts_link">
                        shabbalina@mail.ru
                    </a>
                </div>
            </div>

            <div class="work_expand_2 work_expand">
                <ul>
                    <li>
                        <p>
                            Консультация: Skype/аудио связи в формате вопрос-ответ по продвижению Вашего бизнеса.
                        </p>
                    </li>
                    <li>
                        <p>
                            Высылаю бриф для заполнения.
                        </p>
                    </li>
                    <li>
                        <p>
                            Два дня на подготовку, созваниваемся и подробно разбираем вопросы по Вашему запросу.
                        </p>
                    </li>
                    <li>
                        <p>
                            Прописываю план работ на ближайший месяц.
                        </p>
                    </li>
                </ul>
                <a href="mailto:shabbalina@mail.ru?subject=ТемаПисьма&body=ТелоПисьма" target="_blank" rel="noopener noreferrer" class="work_expand_button">
                    Оставить заявку
                </a>
                <div class="work_expand_contacts">
                    <img class="work_expand_contacts_icon" src="img/phone_icon.svg" alt="">
                    <a href="tel:+79160283269" class="work_expand_contacts_link">
                        8 916 028-32-69
                    </a>
                </div>
                <div class="work_expand_contacts">
                    <img class="work_expand_contacts_icon" src="img/mail_icon.svg" alt="">
                    <a href="mailto:shabbalina@mail.ru?subject=ТемаПисьма&body=ТелоПисьма" target="_blank" rel="noopener noreferrer" class="work_expand_contacts_link">
                        shabbalina@mail.ru
                    </a>
                </div>
            </div>

        </div>
    </div>

    

    <div class="about"><!-- ---------- About Me ---------- -->
        <div class="about_wrapper">

            <div class="about_body">

                <h2 class="about_title">
                    О себе
                </h2>

                <img src="img/photo2.png" alt="" class="about_img_hide"> 
    
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
                Отзывы моих клиентов
            </h2>

            <div class="owl-carousel owl-theme reviews_cards">

                <div class="reviews_card">
                    <div class="reviews_card_body">
                        <h2 class="reviews_card_title">
                            Иван 1
                        </h2>
                        <p class="reviews_card_text">
                            Лилия очень ответственно подошла к работе: провела анализ профиля и конкурентов, тщательно изучила заполненный мной бриф. Составила текст под каждую аудиторию, также была открыта к моим предложениям. В самом начале нашей работы меня заблокировал Фэйсбук, Лилия помогла мне держать себя в руках и подсказала, что необходимо сделать  в такой ситуации :) По итогу прислала отчет о проделанной работе, так что можете не сомневаться в ее ответственности, систематичности и гибкости в работе.
                        </p>
                    </div>
                </div>

                <div class="reviews_card">
                    <div class="reviews_card_body">
                        <h2 class="reviews_card_title">
                            Иван 2
                        </h2>
                        <p class="reviews_card_text">
                            Лилия очень ответственно подошла к работе: провела анализ профиля и конкурентов, тщательно изучила заполненный мной бриф. Составила текст под каждую аудиторию, также была открыта к моим предложениям. В самом начале нашей работы меня заблокировал Фэйсбук, Лилия помогла мне держать себя в руках и подсказала, что необходимо сделать  в такой ситуации :) По итогу прислала отчет о проделанной работе, так что можете не сомневаться в ее ответственности, систематичности и гибкости в работе.
                        </p>
                    </div>
                </div>

                <div class="reviews_card">
                    <div class="reviews_card_body">
                        <h2 class="reviews_card_title">
                            Иван 3
                        </h2>
                        <p class="reviews_card_text">
                            Лилия очень ответственно подошла к работе: провела анализ профиля и конкурентов, тщательно изучила заполненный мной бриф. Составила текст под каждую аудиторию, также была открыта к моим предложениям. В самом начале нашей работы меня заблокировал Фэйсбук, Лилия помогла мне держать себя в руках и подсказала, что необходимо сделать  в такой ситуации :) По итогу прислала отчет о проделанной работе, так что можете не сомневаться в ее ответственности, систематичности и гибкости в работе.
                        </p>
                    </div>
                </div>

                <div class="reviews_card">
                    <div class="reviews_card_body">
                        <h2 class="reviews_card_title">
                            Иван 4
                        </h2>
                        <p class="reviews_card_text">
                            Лилия очень ответственно подошла к работе: провела анализ профиля и конкурентов, тщательно изучила заполненный мной бриф. Составила текст под каждую аудиторию, также была открыта к моим предложениям. В самом начале нашей работы меня заблокировал Фэйсбук, Лилия помогла мне держать себя в руках и подсказала, что необходимо сделать  в такой ситуации :) По итогу прислала отчет о проделанной работе, так что можете не сомневаться в ее ответственности, систематичности и гибкости в работе.
                        </p>
                    </div>
                </div>

                <div class="reviews_card">
                    <div class="reviews_card_body">
                        <h2 class="reviews_card_title">
                            Иван 5
                        </h2>
                        <p class="reviews_card_text">
                            Лилия очень ответственно подошла к работе: провела анализ профиля и конкурентов, тщательно изучила заполненный мной бриф. Составила текст под каждую аудиторию, также была открыта к моим предложениям. В самом начале нашей работы меня заблокировал Фэйсбук, Лилия помогла мне держать себя в руках и подсказала, что необходимо сделать  в такой ситуации :) По итогу прислала отчет о проделанной работе, так что можете не сомневаться в ее ответственности, систематичности и гибкости в работе.
                        </p>
                    </div>
                </div>

                <div class="reviews_card">
                    <div class="reviews_card_body">
                        <h2 class="reviews_card_title">
                            Иван 6
                        </h2>
                        <p class="reviews_card_text">
                            Лилия очень ответственно подошла к работе: провела анализ профиля и конкурентов, тщательно изучила заполненный мной бриф. Составила текст под каждую аудиторию, также была открыта к моим предложениям. В самом начале нашей работы меня заблокировал Фэйсбук, Лилия помогла мне держать себя в руках и подсказала, что необходимо сделать  в такой ситуации :) По итогу прислала отчет о проделанной работе, так что можете не сомневаться в ее ответственности, систематичности и гибкости в работе.
                        </p>
                    </div>
                </div>

                <div class="reviews_card">
                    <div class="reviews_card_body">
                        <h2 class="reviews_card_title">
                            Иван 7
                        </h2>
                        <p class="reviews_card_text">
                            Лилия очень ответственно подошла к работе: провела анализ профиля и конкурентов, тщательно изучила заполненный мной бриф. Составила текст под каждую аудиторию, также была открыта к моим предложениям. В самом начале нашей работы меня заблокировал Фэйсбук, Лилия помогла мне держать себя в руках и подсказала, что необходимо сделать  в такой ситуации :) По итогу прислала отчет о проделанной работе, так что можете не сомневаться в ее ответственности, систематичности и гибкости в работе.
                        </p>
                    </div>
                </div>
                
            </div>

            <script>
                $(document).ready(function(){
                    $('.owl-carousel').owlCarousel({
                        margin: 10,
                        dotsEach: 1,
                        responsiveClass: true,
                            responsive:{
                                0:{
                                    items: 1
                                },
                                767:{
                                    items: 3
                                }
                            }
                    })
                });
            </script>
            
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

                <div class="footer_subtitle">
                    <h2>
                        Контакты:
                    </h2>
                </div>
    
                <ul class="contacts_list">
                    <li class="contacts_item">
                        <img class="contacts_icon" src="img/phone_icon.svg" alt="">
                        <a href="tel:+79160283269" class="contacts_link">
                            8 916 028-32-69
                        </a>
                    </li>
                    <li class="contacts_item">
                        <img class="contacts_icon" src="img/mail_icon.svg" alt="">
                        <a href="mailto:shabbalina@mail.ru?subject=ТемаПисьма&body=ТелоПисьма" target="_blank" rel="noopener noreferrer" class="contacts_link">
                            shabbalina@mail.ru
                        </a>
                    </li>
                    <li class="contacts_item">
                        <a href="#" class="contacts_socials_link">
                            <img class="contacts_socials_icon" src="img/ellipse.svg" alt="">
                        </a>
                        <a href="#" class="contacts_socials_link">
                            <img class="contacts_socials_icon" src="img/ellipse.svg" alt="">
                        </a>
                        <a href="#" class="contacts_socials_link">
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
                    <li class="footer_nav_item">
                        <a href="#offer" class="footer_nav_link">
                            Услуги и цены
                        </a>
                    </li>
                    <li class="footer_nav_item">
                        <a href="#work" class="footer_nav_link">
                            Как работаю
                        </a>
                    </li>
                    <li class="footer_nav_item">
                        <a href="#reviews" class="footer_nav_link">
                            Отзывы
                        </a>
                    </li>
                </ul>

                <div class="footer_caption">
                    <span>
                        © Лилия Шаббалина
                    </span>
                </div>

            </div>
            
        </div>
    </div>
    
    <script src="owlcarousel/jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
</body>
</html>