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
            <script type="text/javascript">
	$(function() {
		var offset = $("#fixed").offset();
		var topPadding = 30;
		$(window).scroll(function() {
			if ($(window).scrollTop() > offset.top) {
				$("#fixed").stop().animate({marginTop: $(window).scrollTop() - offset.top + topPadding});
			}
			else {$("#fixed").stop().animate({marginTop: 0});};});
	});
            </script>
            <link href="<?php echo base_url('demo/style.css')?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/bootstrap.min.lab.css')?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
       <!--Стиль exemple здесь описывает написание текста поверх изображения-->
       

    </head>
    <body>
        <!--Загрузка шапки сайта-->
    <?php echo $this->load->view('header'); ?>
       
    <!--Здесь br отделяет основной контент от фикс. меню в верхнем положении-->
       
<!--container-fluid это контейне всей страницы-->
    <div style="background-color: " class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
            <!--div ниже определяет изображение логотипа Бош-->
            <div>
                <?php echo img('images/bosch_logo.gif'); ?>
            </div>
            
<!--Прокручивающийся блок-->            
  <div class="col-sm-10">
     <div class="row">
            <div class="col-xs-20">
            &nbsp;  
                <h4 style="margin-left: 20px;" >Оборудование для СТО</h4>
                    <div class="panel panel-default" id="fixed">
                            <div class="panel-heading">ООО "УкрТехАвто" ПКК<br> г.Одесса,<br> ул. Базарная, 40<br>тел. +38(050)490 48 28 - Денис</div>
                            <div class="panel-body">Компания "УкрТехАвто" - официальный дилер горажного и диагностического оборудования компании Bosch.</div>
                    </div>
            <hr>
            </div>
     </div>
   </div>

 </div><!--/span3-->
        
<!--span9 основной спан в центре странице ниже картинки или слайдера-->         
    <div class="span9">
         
         
    <div class="span9">
        
    <!--Html Разметка слайдера jQuery -->
            <div id="container">
            <div id="gallery">
                <?php echo img('demo/img/11.jpg'); ?>
                <?php echo img('demo/img/22.jpg'); ?>
                <?php echo img('demo/img/33.jpg'); ?>


                        </div>

                        <div id="thumbs">
                            <?php echo img('demo/img/1.jpg'); ?>
                            <?php echo img('demo/img/2.jpg'); ?>
                            <?php echo img('demo/img/3.jpg'); ?>

                        </div>
                <a href="#" id="next"></a>
            </div>
    
    
       <!--Блок с избранными ссылками на новости или важные темы-->
            <div class="row-fluid">
                <div>
                    <h2>Сервисная служба компании "УкрТехАвто" - гарантия качества на Вашем СТО!</h2>
                    <p>Компания "УкрТехАвто" основана в 1992 году, является ведущим поставщиком высокотехнологичного оборудования для станций технического обслуживания легковых и грузовых автомобилей в южном регионе Украины. Компания УкрТехАвто на сегодня является официальным дилером следующих производителей: BOSCH (с 1992 года), Kärcher (с 1997 года), Orion (с 2002 года), Compac (с 2002 года), Kaeser (с 2010 года) и др.</p>
                    <p class="btn"><?=anchor('welcome/servise_team', 'Узнать больше о сервисной службе "УкрТехАвто" »');?></p>
                </div><!--/span-->
            
         <!--Блок с круглой картинкой-->
           <div class="row">    
            <br>
            <div class="col-md-2 col-sm-3 text-center">
              <a class="story-img" href="#"><img src="<?php echo base_url('images/round/kts.jpg') ?>" style="width:100px;height:100px" class="img-circle"></a>
            </div>
            
            <div class="col-md-10 col-sm-9">
                <h3>Системный тестер Bosch KTS 540</h3>
              <div class="row">
                <div class="col-xs-9">
                  <p>Мультимарочный автосканер для диагностики бензиновых и дизельных автомобилей. 
                Используется с программным обеспечением ESI[tronic]. Безопасный, удобный, быстрый.</p>
                  <p class="lead"><?=anchor('http://ukrtechauto.com/p5224365-sistemnyj-tester-bosch.html', 'Узнать больше! »');?></p>
                  </div>
                  </div>
              </div>
            </div>
            <!--Блок с круглой картинкой-->    
                <div class="row">    
            <br>
            <div class="col-md-2 col-sm-3 text-center">
              <a class="story-img" href="#"><img src="<?php echo base_url('images/round/tce.jpg') ?>" style="width:100px;height:100px" class="img-circle"></a>
            </div>
            
            <div class="col-md-10 col-sm-9">
              <h3>Шиномонтажный станок TCE 4225</h3>
              <div class="row">
                <div class="col-xs-9">
                  <p>Превосходно подходит для небольших сервисных станций.
                      Для шин с посадочным диаметром от 10» до 20» (крепление за внешнюю кромку) и шириной от 3» до 10».
                      Модель ТСЕ 4225 имеет встроенную в зажимы систему импульсной накачки шин. 
                      «Лапа» встроена в кронштейн, который поворачивается вбок для удобства работы.</p>
                  <p class="lead"><?=anchor('http://ukrtechauto.com/p5084185-shinomontazhnyj-stanok-tce.html', 'Узнать больше! »');?></p>
                  </div>
                  </div>
              </div>
            </div>
            <!--Блок с круглой картинкой-->    
                <div class="row">    
            <br>
            <div class="col-md-2 col-sm-3 text-center">
              <a class="story-img" href="#"><img src="<?php echo base_url('images/round/fwa.jpg') ?>" style="width:100px;height:100px" class="img-circle"></a>
            </div>
            
            <div class="col-md-10 col-sm-9">
              <h3>Стенд анализа геометрии ходовой части Bosch FWA 4430</h3>
              <div class="row">
                <div class="col-xs-9">
                  <p>Стенд сход-развал FWA 4430 – универсальный стенд анализа углов установки колес
                      для мультибрендовых автосервисов, 
                      предоставляющий возможность комплексного анализа
                      геометрии ходовой части большинства современных автомобилей.</p>
                  <p class="lead"><?=anchor('http://ukrtechauto.com/p23301493-stend-analiza-geometrii.html', 'Узнать больше! »');?></p>
                  </div>
                  </div>
              </div>
            </div>
          </div><!--/row Это конец ряда с первыми тремя блоками-->

<br><br><br><br>
                    </div><!--/span9-->
                </div><!--/.span9-->
            </div><!--row-fluid-->
        </div><!--conteiner-fluid-->

<br><br><br>
   
   <!--Подключение footer.php-->
    <?php echo $this->load->view('footer'); ?>

    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url('demo/js/mocha.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    </body>
</html>