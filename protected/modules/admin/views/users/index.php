<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h2>Users</h2>
<table class="table table-hover">
    <thead><td><b>ID</b></td><td>Name</td></thead>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>

