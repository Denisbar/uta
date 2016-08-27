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
            
       <!--Стиль exemple здесь описывает написание текста поверх изображения-->
       
    </head>
    <body>
        
       <?php echo $this->load->view('header');?>
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

<div class="row">
    <div class="span6"><br>
        <div align="right"><i><b>Контакты</b></i></div>
        <div align="right">Украина,</div> 
        <div align="right">г. Одесса,</div> 
        <div align="right">ул. Базарная,40/20, </div>
        <div align="right">Телефон (офис): +38(048) 777 15 04 </div>
        <br><br>
        <div align="right"><i><b>Контактное лицо:</b></i> </div>
        <div align="right">Координатор сервисной слюжбы Марина Тубальцева</div>
        <div align="right">Телефон        +38(048) 777 15 04</div>
        <div align="right">Факс           +38(048) 725 73 93</div>
        <div align="right">Телефон (моб.) +38(050) 392 15 99</div>
        <div align="right">Телефон (моб.) +38(050) 336 07 53</div>
        <div align="right"><?php echo mailto('equipmen@ukrtauto.com', 'E-mail: equipmen@ukrtauto.com');?></div>
        <div align="right">По всем вопросам касательно сервисных работ, пожалуйса свяжитесь с <i>Мариной Тубальцевой</i></div>
        <br>
        <div align="right"><i><b>Менеджер по продажам оборудования Bosch:</b></i> </div>
        <div align="right">Денис Барабаш</div>
        <div align="right">Телефон (моб.) +38(050) 490 48 28</div>
        <div align="right"><?php echo mailto('epirogova@ukrtauto.com', 'E-mail: epirogova@ukrtauto.com');?></div>
        <div align="right"><a href="http://ukrtechauto.com">www.ukrtechauto.com</a></div>
    </div>
    <br><br><br><br><br><br>
    <div class="span6">
          <div class="span6 offset2">
              <!--photo-->
          </div>
      </div>
    
</div> 
      
      
      
</div>
    </div><!--/.fluid-container-->
    <br><br><br>
    
</div>
<?php echo $this->load->view('footer'); ?>
    <!-- Le javascript
    ================================================== -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    </body>
</html>