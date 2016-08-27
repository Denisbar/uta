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
            <link href="<?php echo base_url('assets/css/bootstrap.min.lab.css')?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>     
            <!--Стиль exemple здесь описывает написание текста поверх изображения-->


    </head>

    <body>
        
       <?php echo $this->load->view('header'); ?>
    <!--Здесь br отделяет основной контент от фикс. меню в верхнем положении-->
        
<!--container-fluid это контейне всей страницы-->
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
            <!--div ниже определяет изображение логотипа Бош-->
            <div>
             <?php echo img('images/bosch_logo.gif'); ?>
            </div>
        <!--Боковой слайд бар с дополнительными ссылками-->
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
        </div><!--/span-->
        
    <!--span9 основной спан в центре странице ниже картинки или слайдера-->         
    <div class="span9">
    <br>
        <h4>Test registration form</h4>
        <br>
        <div class="row">

<div class="login_form">
    <h3>Войти для просмотра регистраций:</h3>
    <br>
    <?php
        echo form_open('welcome/validete_credentials');
        echo form_label('Введите ваш логин:', 'username');
        echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";echo "&nbsp";
		
		
        echo form_input('username');
        echo "<br /><br />";
        echo form_label('Введите ваш пароль:', 'username');
        echo "&nbsp";echo "&nbsp";echo "&nbsp";
        echo form_password('password', 'Password');
        echo "<br /><br />";
        echo form_submit('submit', 'Войти!');
        
        echo "<br /><br />";
        
        echo anchor('welcome/signup', 'Или зарегестрируйся!');
        
    ?>
</div>            
            
        </div>
        
        
        
    </div>
      
    </div><!--/.fluid-containe-->
<br><br><br>
    
</div>
<?php echo $this->load->view('footer'); ?>
    <!-- Le javascript
    ================================================== -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	
	
    </body>
</html>