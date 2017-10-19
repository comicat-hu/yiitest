<?php

class MathController extends Controller
{
    public function actions()
    {
        $this->layout = 'math_layout';
        return [
            'add' => 'application.controllers.math.addAction',
            'sub' => 'application.controllers.math.subAction',
            'mul' => 'application.controllers.math.mulAction',
            'div' => 'application.controllers.math.divAction',
        ];
    }

    public function actionIndex()
    {
        $this->layout = 'math_layout';
        $this->render('index');
    }


    /** 
     * For Ajax POST validate
     */
    public function performAjaxValidation($model)
    {

        var_dump($_POST);
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'math-form') {
            echo CActiveForm::validate($model); 
            Yii::app()->end();
        }
    }
}