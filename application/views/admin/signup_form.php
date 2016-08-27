<html>
<head>
    <title>Регистрация</title>
    <meta charset="utf-8">
    <link href="<?php echo base_url('assets/css/bootstrap.min.lab.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
    <style>
        .form {
            width: 200px;
            padding: 10px;
            margin: auto;
            background: #fc0;
        }
    </style>
</head>
<body style="background-color: darkolivegreen;">
<?php echo $this->load->view('header') ?>
<div class="form">
    <h1>Create an Account</h1>
    <fieldset>
        <legend>Persanol Information</legend>

        <?php
        echo form_open('welcome/create_member');

        echo form_input('first_name', set_value('first_name', 'Имя'));
        echo "<br /><br />";

        echo form_input('last_name', set_value('last_name', 'Фамилия'));
        echo "<br /><br />";

        echo form_input('email_address', set_value('email_address', 'Email'));
        echo "<br /><br />";
        ?>

    </fieldset>

    <fieldset>
        <legend>Login Info</legend>
        <?php
        echo form_input('username', set_value('username', 'Логин'));
        echo "<br /><br />";
        echo form_input('password', set_value('password', 'Пароль'));
        echo "<br /><br />";
        echo form_input('password2', set_value('password2', 'Подтвержение пароля'));
        echo "<br /><br />";
        echo form_submit('submit', 'Create Account');
        ?>

        <?php
        echo validation_errors('<p class="error">');
        ?>
    </fieldset>
</div>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>