<?php

class ChildrenModel extends CFormModel
{
    public $age;
    public $name;

    public function rules()
    {
        return array(
            array('age', 'numerical', 'allowEmpty' => false),
            array('name', 'length', 'min' => 1, 'max' => 10, 'allowEmpty' => false),
        );
    }
}