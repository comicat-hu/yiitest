<p><a href="./?r=math/index">Back</a><p>
<fieldset>
    <legend>Math -
        <?php echo $this->action->id;?>
    </legend>
    <b>
        <?php echo $show ?>
    </b>
    <?php 
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'math-form',
        'enableAjaxValidation' => true,
        // 'enableClientValidation' => true,
        'clientOptions'=>array(
            'validateOnChange'=>true,
           ),
        'focus' => array($model, 'a'),
    )); ?>

    
<?php echo $form->errorSummary($model); ?>
    <div class="row submit">
        <?php echo $form->textField($model, 'a'); ?>
        <?php echo $sign;?>
        <?php echo $form->textField($model, 'b'); ?>
        <?php echo CHtml::submitButton('Submit'); ?>
        
    </div>

    <?php echo $form->error($model, 'a'); ?>
    <?php echo $form->error($model, 'b'); ?>

    <?php $this->endWidget(); ?>
</fieldset>
