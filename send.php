<?php
    $name = $_POST['name'];
    $tel = $_POST['tel'];

    $name = urldecode($name);
    $tel = urldecode($tel);

    echo "<p align='center'>";
    echo "<br>";

    if (mail("shabbalina@mail.ru", "Заявка с сайта", "Имя: ".$name."\n\nТелефон: ".$tel."\n"))
    {
        echo "Сообщение успешно отправлено";
    } else {
        echo "При отправке сообщения возникли проблемы";
    }

    echo "</p>";
?>