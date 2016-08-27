<!DOCTYPE html>
<html>
<head>
    <title>
        <?php echo TITLE ?>
    </title>
    <meta charset="utf-8">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            var offset = $("#fixed").offset();
            var topPadding = 30;
            $(window).scroll(function () {
                if ($(window).scrollTop() > offset.top) {
                    $("#fixed").stop().animate({marginTop: $(window).scrollTop() - offset.top + topPadding});
                }
                else {
                    $("#fixed").stop().animate({marginTop: 0});
                }
                ;
            });
        });
    </script>
    <link href="<?php echo base_url('assets/css/bootstrap.min.lab.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
    <!--Стиль exemple здесь описывает написание текста поверх изображения-->

</head>
<body>


<?php echo $this->load->view('header'); ?>
<br>
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
                        <h4 style="margin-left: 20px;">Оборудование для СТО</h4>
                        <div class="panel panel-default" id="fixed">
                            <div class="panel-heading">ООО "УкрТехАвто" ПКК<br> г.Одесса,<br> ул. Базарная, 40<br>тел.
                                +38(050)490 48 28 - Денис
                            </div>
                            <div class="panel-body">Компания "УкрТехАвто" - официальный дилер горажного и
                                диагностического оборудования компании Bosch.
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div><!--/span-->

        <!--span9 основной спан в центре странице ниже картинки или слайдера-->
        <div class="span9">
            <!--Блок текста поверх изображения это его стиле в head-->

            <!--Блок на ссылку перехода на страницу с информацией о компании-->

            <!--Блок с избранными ссылками на новости или важные темы-->

            <div class="row-fluid">
                <div span5><h4>Сервисные работы, прайс-лист Bosch</h4></div>
                <table class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                    <tr class="success">
                        <th>№</th>
                        <th>Оборудование</th>
                        <th>Количество часов</th>
                        <th>Стоимость</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($row as $row_item): ?>
                        <tr>
                            <td><?php echo $row_item['id'] ?></td>
                            <td><?php echo $row_item['equipment'] ?></td>
                            <td><?php echo $row_item['quantity'] ?></td>
                            <td><?php echo $row_item['price'] ?></td>
                        </tr>

                    <?php endforeach; ?>
                    </tbody>

                </table>
                <div span5>
                    <p><h6>*Указанная стоимость услуг действует в пределах радиуса 50 км от г.Одесса</h6></p>
                    <p><h6>*Стоимость норма часа = 320.00 грн.</h6></p>
                    <p><h6>*Цены указаны без стоимости расходных материалов, масел, дюбелей, электро кабеля,
                        трубопровода и пр.</h6></p>
                    <p><h6>*Цены указаны без транспортных расходов более 50км</h6></p>
                </div>

            </div><!--/row-->
        </div><!--/span-->
    </div><!--/row-->
    <?php
    //    $data = file_get_contents("application/views/images/images.jpg"); // Read the file's contents
    //$name = 'images.jpg';

    //force_download($name, $data);
    ?>
    <!--Footer-->


</div><!--/.fluid-container-->
</div>
<?php echo $this->load->view('footer'); ?>
<!-- Le javascript
================================================== -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>