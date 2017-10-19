<?php

class SiteController extends Controller
{

    public function actions()
    {
        return [
            'add' => [
                'class' => 'application.controllers.math.addAction',
            ],
            'sub' => [
                'class' => 'application.controllers.math.subAction',
            ],
            'mul' => [
                'class' => 'application.controllers.math.mulAction',
            ],
            'div' => [
                'class' => 'application.controllers.math.divAction',
            ]
        ];
    }

    public function actionIndex()
    {
        $this->render('index');
    }
    
    public function actionHello($name = '')
    {
        echo 'Action Hello!!<br>';

        $handler1 = function ($event) {
            echo 'onFuck event handler1 <br>';
            $event->handled = true;
        };

        $handler2 = function () {
            echo 'onFuck event handler2 <br>';
        };

        // add event handler to event
        // $this->onFuck = $handler1;
        // $this->onFuck = $handler2;

        $this->onFuck->add($handler1);
        $this->onFuck->add($handler2);

        // $this->detachEventHandler('onFuck', $handler1);


        // bind event
        if ($this->hasEventHandler('onFuck')) {

            // raiseEvent
            $this->onFuck(new CEvent($this));
        }

        $this->renderPartial('hello', ['name' => $name]);
    }

    public function actionLogin()
    {
        $model = new LoginForm;

        if (isset($_POST['LoginForm'])) {

            // collection users data
            $model->setAttributes($_POST['LoginForm']);

            if ($model->validate()) {
                var_dump($model->username);
                Yii::app()->getUser()->setReturnUrl('?r=site/login');
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }

        $this->render('login', ['model' => $model]);

    }

    public function filterTest($filterChain)
    {
        // echo 'run filterTest<br>';
        $filterChain->run();
    }

    public function filters()
    {
        return [
            'accessControl',
            [
                'application.filters.MathFilter + add, sub, mul, div',
            ],
            'test - add, sub, mul, div',
        ];
    }

    public function onFuck($event)
    {
        echo 'raiseEvent - onFuck <br>';
        $this->raiseEvent('onFuck', $event);
    }
}
