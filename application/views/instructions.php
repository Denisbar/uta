<!DOCTYPE html>
<html>
    <head>
        <title>
            ПКК "УкрТехАвто" ООО
        </title>
            <meta charset="utf-8">
            <meta name="keywords" content="" />
            <meta name="description" content="" />
            <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
            <script src="http://jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
            <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
       <!--Стиль exemple здесь описывает написание текста поверх изображения-->
       <style>
            .example3 {
    display:inline-block;
    position:relative;
}
.example3 .example_text {
    display:block;
    position:absolute;
    left:0;
    bottom:0;
    width:100%;
    box-sizing:border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;

    color:#fff;

    padding:10px;
    background-color:rgba(0,0,0,.3);


}
.example3 h6 {
    font-family:Arial, Helvetica, sans-serif;
    font-size:25px;
    color: #ffffff;
}
.example3 span {
    font-size:18px;
}
</style>
    </head>
    <body>
        
       <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
      <a class="navbar-brand" href="#">Сервисная служба Bosch - Одесса, ул Базарная,40 <br/>Специалист по сервису - Марина т.+380 (50) 392-15-99</a>
  </div>
<!--Фиксорованое навигационное меню-->
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse span7" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      
      <li style="margin: 0 10px 10px 0;" class= "btn btn-success"><?=anchor('welcome/contacts', 'Контакты');?></li>
      
      <li class= "btn btn-warning"><?=anchor('http://ukrtechauto.com/product_list', 'Купить оборудование Bosch');?></li>
      
      
    </ul>
  </div>
</nav>
    <!--Здесь br отделяет основной контент от фикс. меню в верхнем положении-->
        <br><br><br><br>
<!--container-fluid это контейне всей страницы-->
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
            <!--div ниже определяет изображение логотипа Бош-->
            <div>
                <?php echo img('images/bosch_logo_www.jpg'); ?>
            </div>
        <!--Боковой слайд бар с дополнительными ссылками-->
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Гравное меню</li>
              <li class="active"><?=anchor('welcome/main', 'Главная');?></li>
              <li><?=anchor('welcome/price_list', 'Прайс-лист Bosch');?></li>
              <li><?=anchor('welcome/order_for_servise', 'Оформить заявку на ремонт');?></li>
              <li><?=anchor('welcome/instructions', 'Инструкции Bosch');?></li>
              <li><?=anchor('welcome/servise_team', 'Наша сервисная служба');?></li>
              <li><?=anchor('welcome/contacts', 'Контакты - Сервис');?></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
    <!--span9 основной спан в центре странице ниже картинки или слайдера-->         
        <div class="span9">
    <!--Блок текста поверх изображения это его стиле в head-->    
  <div class="span9">
                <div class="span6">
          <div class="span6">
              <?php echo img('images/key.jpg'); ?>
          </div>
      </div>
                
      <h5><i>В данном разделе нашего сайта Вы можете загрузить инструкции по эксплуатации оборудования Bosch и другую интересующюю Вас документацию.<br><br>Если нужная Вам доуцментация отсутствует, Вы можете загрузить её по ссылке с официального сайта представительства компании Bosch.<br><br><a style="text-decoration: underline;" href="<?php echo "http://vk.com" ?>"><h4>Найти больше инструкций >></h4></i></h5>
            </div>
        </div><!--/span-->
        
        <div class="span3">
            <h5><strong>Документация для загрузки:</strong></h5>
        <a href="<?=base_url()?>/application/views/file/1.zip">1. Инструкция по установке ПО ESI[tronic] 2.0 (pdf файл, zip архив)</a>
        <br><hr>
        <a href="<?=base_url()?>/application/views/file/2.zip">2. Установка ПО ESI[tronic] (pdf файл, zip архив)</a>
        <br><hr>
        <a href="<?=base_url()?>/application/views/file/3.zip">3. Лицензирование ESI[tronic] в он-лайн режиме (pdf файл, zip архив)</a>
        <br><hr>
        <a href="<?=base_url()?>/application/views/file/4.zip">4. Настройка прибора KTS в программе DDC (pdf файл, zip архив)</a>
        <br><hr>
        <a href="<?=base_url()?>/application/views/file/5.zip">5. Перечень автомобилей и систем, диагностируемых тестером KTS TRUCK (chm файл, zip архив)</a>
        <br><hr>
        <a href="<?=base_url()?>/application/views/file/6.zip">6. Перечень автомобилей и систем, диагностируемых тестерами KTS-серии (chm файл, zip архив)</a>
        <br><hr>
        <a href="<?=base_url()?>/application/views/file/7.zip">7. Взаимозаменяемость адаптеров к мотортестеру серии FSA (xls файл, zip архив)</a>
        <br><hr>
        <a href="<?=base_url()?>/application/views/file/8.zip">8. Новая кабельная концепция "Easy-Connect"(ppt файл, zip архив)</a>
        <br><hr>
        <a style="text-decoration: underline;" href="<?php echo "http://vk.com" ?>"><i>Еще инструкции >></i></a>
        </div>
      </div><!--/row-->

  

      
      
      <hr>

      

    </div><!--/.fluid-container-->
    <?php echo $this->load->view('footer'); ?>
</div>
    <!-- Le javascript
    ================================================== -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    </body>
</html>