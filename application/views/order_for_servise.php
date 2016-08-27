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
            
            <link href="<?php echo base_url('assets/css/bootstrap.min.lab.css')?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css')?>" rel="stylesheet">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script type="text/javascript" src="<?php echo base_url('application/views/js/jquery.validate.min.js')?>"></script>
			<script type="text/javascript" src="<?php echo base_url('application/views/js/jquery-1.5.2.min.js')?>"></script>
			<script type="text/javascript" src="<?php echo base_url('application/views/js/myscripts.js')?>"></script>
            <!--Стиль exemple здесь описывает написание текста поверх изображения-->


    </head>
	<style>
		#contact_form{
		background-color: ;
		/*text-align: center;*/
		margin: 10px;
		padding: 10px;
		width: 100%;
		text-align: left;
		}
		#name{
		border-radius: 5px;
		border-style: inset;
		margin:5px;
		
		}
		#name:hover{
		border-color:lime;
		}
		#email:hover{
		border-color:lime;
		}
		#city:hover{
		border-color:lime;
		}
		#phone:hover{
		border-color:lime;
		}
		#message1:hover{
		border-color:lime;
		}
		#you_want_some:hover{
		border-color:lime;
		}
		#email{
		
		border-radius: 5px;
		border-style: inset;
		margin:5px;
		
		}
		#city{
		
		border-radius: 5px;
		border-style: inset;
		margin:5px;
		}
		#phone{
		
		border-radius: 5px;
		border-style: inset;
		margin:5px;
		}
		#message1{
		
		border-radius: 5px;
		border-style: inset;
		margin:5px;
		}
		#you_want_some{
		
		border-radius: 5px;
		border-style: inset;
		margin:5px;
		}
		#lable{
		font-size: medium;
		font-weight: bold;
		font-style: italic;
		margin-bottom: initial;
		}
	</style>
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
        <h4>Бланк оформления заявки на ремонт:</h4>
        <br>
        <div class="row">
            <div class="span7 offset2">
                
        <!--Форма обратной связи-->            
        <?php 
        $atributes = array(
            'class'=>'mail',
            'name'=>'contact_form',
            'id'=>'contact_form',
            'onsubmit'=>'return validate_form ( )',
        );
        echo form_open('welcome/sendmail',$atributes); ?>
                
         
			
                <h4 id="lable">Имя:</h4>
                
                    <?php 
                    $name = array(
              'class'       => 'rfield',         
              'name'        => 'name',
              'id'          => 'name',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:40%',
              'placeholder'=>'Имя и фамилия',
                        
            );
                    echo form_input($name); ?>
                <br><br>
             
                <h4 id="lable">E-mail:</h4>
             
                
             
                    <?php
                    $e_mail = array(
               'class'       => 'rfield',         
              'name'        => 'email',
              'id'          => 'email',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:40%',
              'placeholder'=>'Ваш e-mail',          
            );
                    echo form_input($e_mail); ?>
                <br><br>
                
             
				<h4 id="lable">Город:</h4>
             
                    <?php
                    $city = array(
              'class'       => 'rfield',
              'name'        => 'city',
              'id'          => 'city',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:40%',
              'placeholder'=>'Ваш город',          
            );
                    echo form_input($city); ?>
                <br><br>
             
                <h4 id="lable">Моб.телефон:</h4>
             
                    <?php
                    $phone = array(
              'class'       => 'rfield',
              'name'        => 'phone',
              'id'          => 'phone',
              'value'       => '',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:40%',
              'placeholder'=>'Контактный телефон',          
            );
                    echo form_input($phone); ?>
                <br><br>
                <h4 id="lable">Описание поломки:</h4>
             
                    <?php
                    $data = array(
              'class'       => 'rfield',         
              'name'        => 'message1',
              'id'          => 'message1',
              'value'       => '',
              'rows'        => '3',
              'cols'        => '50',
              'style'       => 'width:50%',
              'placeholder'=>'Пожалуйста, укажите подробное описание поломки Вашего оборудования.',
            );
                    echo form_textarea($data); //'message'?>
                <br><br>
             
				<h4 id="lable">Пожелания:</h4>
             
                    <?php
                    $dta = array(
              'class'       => 'rfield',         
              'name'        => 'you_want_some',
              'id'          => 'you_want_some',
              'value'       => '',
              'rows'        => '3',
              'cols'        => '50',
              'style'       => 'width:50%',
               'placeholder'=>'Пожалуйста, укажите Ваши пожелания, если таковые имеються.',
            );
                    echo form_textarea($dta); //'adress'?>
                <br><br>
                 
                <?php //echo form_submit('mysubmit', 'Отправить!'); ?>
             
                <input onclick="myFunction()" type="submit" class="btn_submit disabled" name="mysubmit" value="Отправить!" style="padding: 6px 10px;
  -webkit-border-radius: 2px 2px;
  border: solid 1px rgb(153, 153, 153);
  background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgb(255, 255, 255)), to(rgb(98,202,227)));
  color: #333;
  text-decoration: none;
  cursor: pointer;
  display: inline-block;
  text-align: center;
  text-shadow: 0px 1px 1px rgba(255,255,255,1);
  line-height: 1;
  border-color: rgb(98,202,227);" />
               <script>
                function myFunction()
                {
				var name= $(input[name:name]);
                    if(name == ''){alert('s');}  // ??????
                }
                </script>
                <br>
                <p><h6>*Ваша заявка будет обработана и в течении дня. Наш консультант свяжиться с Вами.</h6></p>
            </div>
            
        </div>
        
        
        
    </div>
      
    </div><!--/.fluid-containe-->
<br><br><br>
    
</div>
<?php echo $this->load->view('footer'); ?>
    
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	
	
    </body>
</html>