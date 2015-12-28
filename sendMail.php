<?php

    if(!empty($_POST['headerSubmit'])){
        $textMessage = "Отправлено из заголовка. ";        
    }
    else
    {
        $textMessage = "Отправлено из колонтитула. ";
    }

$textMessage = $textMessage . "Имя: " . $_POST['name'] . ", контактный телефон: " . $_POST['phone'];            
//echo $textMessage;

    $sendResult = mail("info@riga-sad.ru", "Заявка со страницы новогдняя елка", $textMessage);
//	$sendResult = mail("dyuchus@gmail.com", "Заявка со страницы новогдняя елка", $textMessage);
?>



<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<title>Маленькая страна - сообщение отправлено</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body class="landing">


    
        <section id="one" class="wrapper style5 special">
            <div class="inner">
                <h2> <?php echo  $_POST['name'] ?>, cпасибо за проявленный интерес! <br/>
                    В ближайшее время мы свяжемся с Вами!
                </h2>

            </div>
        </section>
	</body>
</html>