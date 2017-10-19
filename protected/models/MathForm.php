<?php

class MathForm extends CFormModel
{
    public $a;
    public $b;

    public function rules()
    {
        return [
            ['a, b', 'numerical', 'allowEmpty' => false],
        ];
    }

}