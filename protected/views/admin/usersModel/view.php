<?php
/* @var $this UsersModelController */
/* @var $model UsersModel */

$this->breadcrumbs=array(
	'Users Models'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List UsersModel', 'url'=>array('index')),
	array('label'=>'Create UsersModel', 'url'=>array('create')),
	array('label'=>'Update UsersModel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UsersModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UsersModel', 'url'=>array('admin')),
);
?>

<h1>View UsersModel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'role',
		'usrPass',
	),
)); ?>
