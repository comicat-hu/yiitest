<fieldset>
<legend>CHtml::beginForm</legend>
<div class="form">
<?php echo CHtml::beginForm();?>

    <?php echo CHtml::errorSummary($model);?>

    <div class="row">
        <?php echo CHtml::activeLabel($model, 'username');?>
        <?php echo CHtml::activeTextField($model, 'username');?>
    </div>

    <div class="row">
        <?php echo CHtml::activeLabel($model, 'password');?>
        <?php echo CHtml::activePasswordField($model, 'password');?>
    </div>

    <div class="row rememberMe">
        <?php echo CHtml::activeCheckBox($model, 'rememberMe');?>
        <?php echo CHtml::activeLabel($model, 'rememberMe');?>
    </div>

    <div class="row submit">
        <?php echo CHtml::submitButton('Login')?>
    </div>
        
<?php echo CHtml::endForm();?>

</div>
</fieldset>

<fieldset>
<legend>Widget - CActiveForm</legend>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm'); ?>
 
    <?php echo $form->errorSummary($model); ?>
 
    <div class="row">
        <?php echo $form->label($model,'username'); ?>
        <?php echo $form->textField($model,'username') ?>
    </div>
 
    <div class="row">
        <?php echo $form->label($model,'password'); ?>
        <?php echo $form->passwordField($model,'password') ?>
    </div>
 
    <div class="row rememberMe">
        <?php echo $form->checkBox($model,'rememberMe'); ?>
        <?php echo $form->label($model,'rememberMe'); ?>
    </div>
 
    <div class="row submit">
        <?php echo CHtml::submitButton('Login'); ?>
    </div>
 
<?php $this->endWidget(); ?>
</div><!-- form -->
</fieldset>