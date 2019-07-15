<?php
/* @var $this JadwalController */
/* @var $model Jadwal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jadwal-form',
	'htmlOptions' => array('enctype' => 'multipart/form-data','autocomplete'=>'off'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Tempat'); ?>
		<?php echo $form->textField($model,'Tempat',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'Tempat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tanggal'); ?>
		<?php //echo $form->textField($model,'Tanggal');
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'name'=>'Jadwal[Tanggal]',
            'value'=>$model->Tanggal,
            'options'=>array(
                'showAnim'=>'fold',
                'dateFormat'=>'yy-mm-dd',
            ),
        ));

         ?>
		<?php echo $form->error($model,'Tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Info'); ?>
		<?php echo $form->textField($model,'Info',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'Info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jenis_Kegiatan'); ?>
		<?php echo $form->dropDownList($model,'Jenis_Kegiatan',array('K.Peningkatan Pemberdayaan'=>'K.Peningkatan Pemberdayaan','K.Pembinaan Desa'=>'K.Pembinaan Desa','K.Pengembangan Ekonomi'=>'K.Pengembangan Ekonomi'), array('options' => array('K.Pembinaan Desa'=>array('selected'=>true))));?>
		<?php echo $form->error($model,'Jenis_Kegiatan'); ?>
	</div>

	<div class="row"> <?php echo $form->labelEx($model,'berkas'); ?>
<?php echo $form->fileField($model,'berkas',array('size'=>50,'maxlength'=>50)); ?>
<?php echo $form->error($model,'berkas'); ?>
</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->