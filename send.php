<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $name = trim(urldecode(htmlspecialchars($name)));
    $email = trim(urldecode(htmlspecialchars($email)));
    $msg = trim(urldecode(htmlspecialchars($msg)));

    $html_text = "<h1>На вашем сайте была составлена заявка</h1>
                    <br>От: <b>".$name."</b>
                    <br>E-mail: <b>".$email."</b>
                    <br>Пользователь оставил комментарий ".$msg."
                    <br>Поздравляю с новой заявкой!";
    $my_email = "hgfgvvg.ru@gmail.com";
    if(mail($my_email, "Новый запрос на создание сайта", $html_text,
          "From: cccr-early.ru\r\n". "Content-type: text/html\r\n")){
        echo '{"status": "ok"}';
    }else{
        echo '{"status": "error"}';
    }
?>