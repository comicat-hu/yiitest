<?php

class MathAction extends CAction
{
    public function run($a = 0, $b = 0)
    {
        $show = '';
        $result = $this->calc($a, $b);
        $model = new MathForm;

        // Yii::app()->controller->performAjaxValidation($model);

        if (isset($_POST['MathForm'])) {

            $model->setAttributes($_POST['MathForm']);

            if ($model->validate()) {

                $a = $model->a;
                $b = $model->b;

                if (empty($model->a)) {
                    $a = 0;
                }
                if (empty($model->b)) {
                    $b = 0;
                }     
    
                
                $result = $this->calc($a, $b);
            }   
        }
        $sign = $this->getSign();
        $show = "$a $sign $b = $result <br>";
        return $this->getController()->render('math', ['model' => $model, 'show' => $show, 'sign' => $sign]);
    }

    public function getSign()
    {
        $signs = [
            'add' => '+',
            'div' => '/',
            'mul' => '*',
            'sub' => '-',
        ];
        $actionID = $this->controller->action->id;
        return $signs[$actionID];
    }

    public function calc($a, $b)
    {
        return 0;
    }
}