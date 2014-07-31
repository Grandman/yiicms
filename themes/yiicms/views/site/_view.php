<?php
/* @var $this UsersController */
/* @var $data Posts */
?>


       <h2><?php echo CHtml::link(CHtml::encode($data->title), array('posts/view', 'id'=>$data->id)); ?></h2>
        <?php echo CHtml::encode($data->text); ?>
<br>