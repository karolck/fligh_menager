<!DOCTYPE html>
<html lang="en">

<head>

    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->css('../bower_components/bootstrap/dist/css/bootstrap.min.css') ?>
    <?= $this->Html->css('../bower_components/metisMenu/dist/metisMenu.min.css') ?>
    <?= $this->Html->css('../dist/css/sb-admin-2.css') ?>
    <?= $this->Html->css('../bower_components/font-awesome/css/font-awesome.min.css') ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <?= $this->fetch('content') ?>
</div>

<?= $this->Html->script('../bower_components/jquery/dist/jquery.min.js') ?>
<?= $this->Html->script('../bower_components/bootstrap/dist/js/bootstrap.min.js') ?>
<?= $this->Html->script('../bower_components/metisMenu/dist/metisMenu.min.js') ?>
<?= $this->Html->script('../dist/js/sb-admin-2.js') ?>


</body>

</html>
