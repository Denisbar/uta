<html>
<head>

</head>
<body style="background-image: url(<?php echo base_url("images/bg.jpg") ?>);">
<!--Bootstrap верхние меню фиксированое вверху-->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" rel="home" href="http://diagnostic.bosch.com.ua/">Bosch</a>
    </div>
    <!--Кнопки верхнего меню-->
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><?= anchor('welcome/main', 'Главная'); ?></li>
            <li><?= anchor('price/viewRows', 'Прайс-лист'); ?></li>
            <li><?= anchor('welcome/contacts', 'Контакты'); ?></li>
            <li><?= anchor('welcome/servise_team', 'О компании'); ?></li>
            <li><?= anchor('welcome/order_for_servise', 'Обратная связь'); ?></li>
            <li><?= anchor('welcome/login', 'Регистрация'); ?></li>
            <li><?= anchor('welcome/resume', 'Resume'); ?></li>

        </ul>
    </div>
</div>
<br><br><br>
</body>
</html>