<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $name = trim(urldecode(htmlspecialchars($name)));
    $email = trim(urldecode(htmlspecialchars($email)));
    $msg = trim(urldecode(htmlspecialchars($msg)));
    if(mail("hgfgvvg.ru@gmail.com", "Новый запрос"б
    "<h1>На вашем сайте была оставленна заявка</h1>
    <br>от: <b>".$name"</b>
    <br>e-mail: <b>".$email"
    <br>пользователь оставил комментарий: ".$msg"
    <br>e-mail: Поздравляем с новой заявкой!",
    ""
    "))
    
    htmlspecialchars($email);
    urldecode($email);
    trim($email);
?>