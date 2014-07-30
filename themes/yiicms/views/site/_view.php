<?php
/* @var $this UsersController */
/* @var $data Users */
?>


        <?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->title)); ?>
<br>
        <?php echo CHtml::encode($data->text); ?>
<br>