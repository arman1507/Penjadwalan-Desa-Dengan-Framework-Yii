<?php
/* @var $this JadwalController */
/* @var $data Jadwal */
?>
<br></br>
<div class="view">
	<link rel="stylesheet" href="./css/form.css" type="text/css">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jadwal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_jadwal), array('view', 'id'=>$data->id_jadwal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tempat')); ?>:</b>
	<?php echo CHtml::encode($data->Tempat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->Tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Info')); ?>:</b>
	<?php echo CHtml::encode($data->Info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Jenis_Kegiatan')); ?>:</b>
	<?php echo CHtml::encode($data->Jenis_Kegiatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Berkas')); ?>:</b>
	<?php echo CHtml::link($data->berkas, ('/desa/images/'.$data->berkas)); ?>

	<br />
<br></br>
	
</div>