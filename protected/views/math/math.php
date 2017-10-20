<b>
    <?php echo $show ?>
</b>
<?php 
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'math-form',
    // 'enableAjaxValidation' => true,
    'enableClientValidation' => true,
    // 'clientOptions'=>array(
    //     'validateOnChange'=>true,
    //    ),
    'focus' => array($model, 'a'),
)); ?>



<div class="row submit">
    <?php echo $form->textField($model, 'a', ['placeholder' => 'A']); ?>
    <?php echo $sign;?>
    <?php echo $form->textField($model, 'b', ['placeholder' => 'B']); ?>
    <?php echo CHtml::submitButton('Submit'); ?>
    <a href="./"><?php echo CHtml::button('Back'); ?></a>
</div>

<?php echo $form->error($model, 'a'); ?>
<?php echo $form->error($model, 'b'); ?>

<?php $this->endWidget(); ?>

