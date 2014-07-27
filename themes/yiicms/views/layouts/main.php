<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>yiicms</title>
    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">

    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">yiicms</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li<?php if(Yii::app()->controller->id=="site") echo ' class="active"'; ?>><a href="/">Main</a></li>
                    <li<?php if(Yii::app()->controller->module!= null && Yii::app()->controller->module->id=="admin") echo ' class="active"'; ?>><a href="<?php echo Yii::app()->urlManager->createUrl('admin');?>">admin</a></li>
                    <?php if(Yii::app()->controller->module!= null && Yii::app()->controller->module->id=="admin"): ?>
                    <li><a href="<?php echo Yii::app()->urlManager->createUrl('admin/users');?>">Users</a></li>
                    <?php endif;?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </div>

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron col-md-8">

        <?php echo $content; ?>
    </div>
    <div class="jumbotron col-md-3 col-md-offset-1">
        <?php if (Yii::app()->user->isGuest): ?>
            <?php $this->widget('UserLogin',array('visible'=>Yii::app()->user->isGuest)); ?>
        <?php else: ?>
            Добро пожаловать <?php echo Yii::app()->user->username;?><br>
            <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title'=>'Operations',
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items'=>$this->menu,
                'htmlOptions'=>array('class'=>'operations'),
            ));
            $this->endWidget();
            ?>
            <a href="<?php echo Yii::app()->urlManager->createUrl('site/logout');?>">Выйти</a>
        <?php endif; ?>


    </div>

</div>


<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
</body>
</html>