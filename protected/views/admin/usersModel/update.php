<?php
/* @var $this UsersModelController */
/* @var $model UsersModel */

$this->breadcrumbs=array(
	'Users Models'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsersModel', 'url'=>array('index')),
	array('label'=>'Create UsersModel', 'url'=>array('create')),
	array('label'=>'View UsersModel', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UsersModel', 'url'=>array('admin')),
);
?>

<h1>Update UsersModel <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>