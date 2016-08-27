<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.lab.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>">
</head>
<body>

<?php echo $this->load->view('header'); ?>

<form class="form-horizontal" role="form" action="<?php echo base_url(); ?>index.php/price/insert_prices_into_db"
      method="POST">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Перечень работ</label>
        <div class="col-sm-10">
            <input type="text" name="equipment" class="form-control" id="inputEmail3" placeholder="Описание">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Перечень работ</label>
        <div class="col-sm-10">
            <input type="text" name="hours" class="form-control" id="inputEmail3" placeholder="Количество часов">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Перечень работ</label>
        <div class="col-sm-10">
            <input type="text" name="price" class="form-control" id="inputEmail3" placeholder="Цена">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Вставить</button>
        </div>
    </div>
</form>
</body>
</html>
