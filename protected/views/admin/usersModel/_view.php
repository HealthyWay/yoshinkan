<?php
/* @var $this UsersModelController */
/* @var $data UsersModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usrPass')); ?>:</b>
	<?php echo CHtml::encode($data->usrPass); ?>
	<br />


</div>