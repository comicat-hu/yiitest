<?php

/**
 * PHP Version 5.6.31
 * 
 * Class for MathController
 * 
 * @author comi.hu <comi.hu@104.com.tw>
 */
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

        // var_dump($_POST);
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'math-form') {
            echo CActiveForm::validate($model); 
            Yii::app()->end();
        }
    }
}