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

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"> Flight Manager </a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li>
                        <?= $this->Html->link('<i class="fa fa-sign-out fa-fw"></i> Logout', ['controller'=>'users','action'=>'logout'], ['escape' => False]); ?>
                    </li>
                </ul>
            </li>
        </ul>

        <?= $this->element('menu'); ?>


    </nav>

    <div id="page-wrapper">
        <?= $this->fetch('content') ?>
    </div>


</div>

<?= $this->Html->script('../bower_components/jquery/dist/jquery.min.js') ?>
<?= $this->Html->script('../bower_components/bootstrap/dist/js/bootstrap.min.js') ?>
<?= $this->Html->script('../bower_components/metisMenu/dist/metisMenu.min.js') ?>
<?= $this->Html->script('../dist/js/sb-admin-2.js') ?>


</body>

</html>
