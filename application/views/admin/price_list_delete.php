<!DOCTYPE html>
<html>
<head>
    <title>
        ПКК "УкрТехАвто" ООО
    </title>
    <meta charset="utf-8">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js" type="text/javascript"></script>
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

                        <th>Оборудование</th>
                        <th>Количество часов</th>
                        <th>Стоимость</th>
                        <th>Удалить</th>
                        <th>Вставить</th>
                        <th><a href="<?php echo site_url('priceadmin/insert_form'); ?>">Вставить</a></th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($row as $row_item): ?>
                        <tr>
                            <td><?php echo $row_item['equipment'] ?></td>
                            <td><?php echo $row_item['quantity'] ?></td>
                            <td><?php echo $row_item['price'] ?></td>
                            <td><a href="<?php echo site_url('price/delete_row/' . $row_item['id']); ?>">Delete</a></td>
                            <td><a href="<?php echo site_url('priceadmin/insert_form'); ?>">Вставить</a></td>
                        </tr>

                    <?php endforeach; ?>
                    </tbody>

                </table>
                <div class="form-horizontal" role="form" action="<?php echo base_url(); ?>index.php/admin/insert_text_area">
                    <form>
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-10">
                                <input class="form-control" rows="3" name="text" placeholder="Описание табоицы">
                                <button type="submit" class="btn btn-default">Изменить</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
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