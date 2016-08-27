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
            
            
            <script>
            $('.thumbnail').click(function(){
  	$('.modal-body').empty();
  	var title = $(this).parent('a').attr("title");
  	$('.modal-title').html(title);
  	$($(this).parents('div').html()).appendTo('.modal-body');
  	$('#myModal').modal({show:true});
});
            </script>
            <link href="<?php echo base_url('assets/css/bootstrap.min.lab.css')?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
       <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-image-gallery.css')?>">
            <!--Стиль exemple здесь описывает написание текста поверх изображения-->
            <style>
                .modal-dialog {width:600px;}
                .thumbnail {margin-bottom:6px;}
            </style>>
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
            <h3>Наш сервис всегда готов прийти к Вам на помощь!</h3>
            <div class="span9">
                <div class="span6">
          <div class="span6">
              <?php echo img('images/teem.jpg'); ?>
          </div>
      </div>
                
                <h5>Основным направлением деятельности компании является предоставление заказчику комплексного решения по оснащению СТО, начиная от проекта технологической расстановки оборудования до его послепродажного обслуживания. За эти годы компанией накоплен огромный опыт в выполнении всех сопутствующих работ: формирование оптимальной спецификации, прокладка необходимых коммуникаций, пуско-наладочные работы и т.д. Нашими клиентами являются: дилеры Volkswagen, Porsche, Audi, BMW, Mercedes-Benz, Renault, Toyota, Nissan, Volvo, Opel, Jaguar, Range Rover, Honda и др. (более 150 официальных сервисов). Нами осуществлен монтаж более 400 подъемников самых различных модификаций. Отличительной особенностью компании УкрТехАвто является ориентация на максимально быстрое и качественное сервисное сопровождение поставленного оборудования.<br><br> С этой целью в компании имеется мощный отдел послепродажного обслуживания (в составе сертифицированных инженеров и сервисных автомобилей), обширный склад запасных частей, контракты на поставку запасных частей со всеми поставщиками. Сервисные инженеры компании регулярно проходят специализированные тренинги у поставщиков, что подтверждено соответствующими сертификатами, а также внесение сервисной службы УкрТехАвто в глобальный перечень авторизованных сервисных центров компании Роберт Бош.</h5>
            </div>
            
            <br><br><br><br><br><br><br><br><br><br>
          <div class="page-header">
            <br><br><br><br><br><br><br><br>
            <h3>Сервис "УкрТехАвто"
                <small>Фотографии с монтажных работ</small>
            </h3>
          </div>

        </div><!--/span-->
      </div><!--/row-->
<div class="container">
  <div class="row">
    
    <div class="row">
      <div class="col-lg-3 col-sm-3 col-3"><a href="#" title="Image 1"><img src="<?php echo base_url('images/service_team/12.jpg'); ?>" class="thumbnail img-responsive"></a></div>
      <div class="col-lg-3 col-sm-3 col-3"><a href="#" title="Image 2"><img src="<?php echo base_url('images/service_team/11.jpg'); ?>" class="thumbnail img-responsive"></a></div>
      <div class="col-lg-3 col-sm-3 col-3"><a href="#" title="Image 3"><img src="<?php echo base_url('images/service_team/10.jpg'); ?>" class="thumbnail img-responsive"></a></div>
      <div class="col-lg-3 col-sm-3 col-3"><a href="#" title="Image 4"><img src="<?php echo base_url('images/service_team/9.jpg'); ?>" class="thumbnail img-responsive"></a></div>
      <div class="col-lg-3 col-sm-3 col-3"><a href="#" title="Image 5"><img src="<?php echo base_url('images/service_team/8.jpg'); ?>" class="thumbnail img-responsive"></a></div>
      <div class="col-lg-3 col-sm-3 col-3"><a href="#" title="Image 6"><img src="<?php echo base_url('images/service_team/7.jpg'); ?>" class="thumbnail img-responsive"></a></div>
      <div class="col-lg-3 col-sm-3 col-3"><a href="#" title="Image 8"><img src="<?php echo base_url('images/service_team/6.jpg'); ?>" class="thumbnail img-responsive"></a></div>
      <div class="col-lg-3 col-sm-3 col-3"><a href="#" title="Image 9"><img src="<?php echo base_url('images/service_team/5.jpg'); ?>" class="thumbnail img-responsive"></a></div>
      <div class="col-lg-3 col-sm-3 col-3"><a href="#" title="Image 10"><img src="<?php echo base_url('images/service_team/4.jpg'); ?>" class="thumbnail img-responsive"></a></div>
      <div class="col-lg-3 col-sm-3 col-3"><a href="#" title="Image 11"><img src="<?php echo base_url('images/service_team/3.jpg'); ?>" class="thumbnail img-responsive"></a></div>
      <div class="col-lg-3 col-sm-3 col-3"><a href="#" title="Image 12"><img src="<?php echo base_url('images/service_team/2.jpg'); ?>" class="thumbnail img-responsive"></a></div>
      <div class="col-lg-3 col-sm-3 col-3"><a href="#" title="Image 13"><img src="<?php echo base_url('images/service_team/1.jpg'); ?>" class="thumbnail img-responsive"></a></div>
    </div>
    <hr>
    
    <hr>
  </div>
</div>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		<h3 class="modal-title">Heading</h3>
	</div>
	<div class="modal-body">
		
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>
    </div><!--/.fluid-container-->
    <?php echo $this->load->view('footer'); ?>
</div>
    <!-- Le javascript
    ================================================== -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script> 
    <script src="<?php echo base_url('assets/js/load-image.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-image-gallery.js')?>"></script>
    </body>
</html>