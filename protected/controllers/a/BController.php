<?php

class BController extends Controller
{
    public function actions()
    {
        return [
            'add' => 'application.controllers.math.addAction',
            'sub' => 'application.controllers.math.subAction',
        ];
    }

    public function actionIndex()
    {
        echo 'This is B\'s action index.';
    }

    public function actionHello($name = '', array $arr = [])
    {
        echo 'This is B\'s action Hello. ' . $name;
        print_r($arr);
    }
}
